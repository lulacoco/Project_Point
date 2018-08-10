document.addEventListener("DOMContentLoaded", function(event)
{
    // button function

    console.log(document.documentElement.clientWidth);
    document.getElementById("dropdown-trigger").addEventListener("click", function ()
    {
        if(document.getElementById("dropdown-menu").style.display === "block")
            document.getElementById("dropdown-menu").style.display = "none";
        else
            document.getElementById("dropdown-menu").style.display = "block";
    })

    // pictures slideshow

    // var index = 1;
    //
    // function plusIndex(n)
    // {
    //     index = index + n;
    //     showImage(index);
    // }
    //
    // document.getElementsByClassName("button-left").addEventListener("onclick", function ()
    // {
    //     plusIndex(-1);
    // })
    //
    // document.getElementsByClassName("button-right").addEventListener("onclick", function ()
    // {
    //     plusIndex(1);
    // })
    //
    // showImage(1);
    //
    // function showImage(n)
    // {
    //     var i;
    //     var x = document.getElementsByClassName("img");
    //     if(n>x.length)
    //         index = 1;
    //     if(n<1)
    //         index = x.length;
    //
    //     for(i=0;i<x.length;i++)
    //     {
    //         document.getElementsByClassName("img").x[i].style.display = "none";
    //     }
    //     document.getElementsByClassName("img").x[index-1].style.display = "block";
    // }
    //
    // autoSlide();
    // function autoSlide()
    // {
    //     alert("hi");
    //  setTimeout(autoSlide, 5000);
    // }


    // timetable

    function SchedulePlan( element )
    {
        this.element = element;
        this.timeline = this.element.find('.timeline');

        this.eventsWrapper = this.element.find('.events');
        this.eventsGroup = this.eventsWrapper.find('.events-group');
        this.singleEvents = this.eventsGroup.find('.single-event');

        this.scheduleReset();
        this.initEvents();
    }


    var self = this;
    this.singleEvents.each(function(){
        //place each event in the grid -> need to set top position and height
        var start = getScheduleTimestamp($(this).attr('data-start')), //getScheduleTimestamp converts hh:mm to timestamp
            duration = getScheduleTimestamp($(this).attr('data-end')) - start;

        var eventTop = self.eventUnitHeight*(start - self.timelineStart)/self.timelineUnitDuration,
            eventHeight = self.eventUnitHeight*duration/self.timelineUnitDuration;

        $(this).css({
            top: (eventTop -1) +'px',
            height: (eventHeight+1)+'px'
        });
    });

    SchedulePlan.prototype.openModal = function(event) {
        var self = this;
        var mq = self.mq();
        this.animating = true;

        //update event name and time
        this.modalHeader.find('.event-name').text(event.find('.event-name').text());
        this.modalHeader.find('.event-date').text(event.find('.event-date').text());
        this.modal.attr('data-event', event.parent().attr('data-event'));

        //update event content
        this.modalBody.find('.event-info').load(event.parent().attr('data-content')+'.html .event-info > *', function(data){
            //once the event content has been loaded
            self.element.addClass('content-loaded');
        });

        this.element.addClass('modal-is-open');

        if( mq == 'mobile' ) {
            self.modal.one(transitionEnd, function(){
                self.modal.off(transitionEnd);
                self.animating = false;
            });
        } else {
            //change modal height/width and translate it
            self.modal.css({
                top: eventTop+'px', //this is the selected event top position
                left: eventLeft+'px', //this is the selected event left position
                height: modalHeight+'px', //this is the modal final height
                width: modalWidth+'px', //this is the modal final width
            });
            transformElement(self.modal, 'translateY('+modalTranslateY+'px) translateX('+modalTranslateX+'px)');

            //set modalHeader width
            self.modalHeader.css({
                width: eventWidth+'px',  //this is the selected event width
            });
            //set modalBody left margin
            self.modalBody.css({
                marginLeft: eventWidth+'px',
            });

            //change modalBodyBg height/width and scale it
            self.modalBodyBg.css({
                height: eventHeight+'px',
                width: '1px',
            });
            transformElement(self.modalBodyBg, 'scaleY('+HeaderBgScaleY+') scaleX('+BodyBgScaleX+')');

            //change modal modalHeaderBg height/width and scale it
            self.modalHeaderBg.css({
                height: eventHeight+'px',
                width: eventWidth+'px',
            });
            transformElement(self.modalHeaderBg, 'scaleY('+HeaderBgScaleY+')');

            self.modalHeaderBg.one(transitionEnd, function(){
                //wait for the  end of the modalHeaderBg transformation and show the modal content
                self.modalHeaderBg.off(transitionEnd);
                self.animating = false;
                self.element.addClass('animation-completed');
            });
        }
    };



});