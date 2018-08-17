// var a = {{($event->start_date) . " - " . $event->end_date}}
// var date = new Date();
// moment.locale('pl');
// document.write("<td>" + moment(date).format("LLLL") + "</td>");






moment.locale('pl');
var mydate = '2018-09-03 16:40:00';

var weekDayName =  moment(mydate).format('dddd');
document.write("<td>" + weekDayName + "</td>");