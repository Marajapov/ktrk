var calendar_startHour = 6;
var rowHeight = 30;
var rowHeight_day = 75;
var calendar_endHour = 24 + calendar_startHour;
var taskCounter = 0;
var header_day = ["1 day"];
var headers = ["Понедельник", "Вторник", "Среда", "Четверг", "Пятница",  "Суббота", "Воскресенье"];
var cardTemplateDefault = '<div>${title} </div><div>${startTimeString}<br>${endTimeString}</div><div class="event-duration">${durationString}</div>';

var currentError = '';
var errorText_calendar_overlap = 'Too long';
var errorText_calendar_earlierTime = 'Earlier than time';
var errorText_calendar_InvalidValue = "bad value";