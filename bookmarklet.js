d = new Date();
yearNr = d.getFullYear();
// Create a copy of this date object
var target = new Date(d.valueOf());
// ISO week date weeks start on monday
// so correct the day number
var dayNr = (d.getDay() + 6) % 7;
// Set the target to the thursday of this week so the
// target date is in the right year
target.setDate(target.getDate() - dayNr + 3);
// ISO 8601 states that week 1 is the week
// with january 4th in it
var jan4 = new Date(target.getFullYear(), 0, 4);
// Number of days between target date and january 4th
var dayDiff = (target - jan4) / 86400000;
// Calculate week number: Week 1 (january 4th) plus the
// number of weeks between target date and january 4th
var weekNr = 1 + Math.ceil(dayDiff / 7);
var weekNr = weekNr -1;

if (document.getSelection) {
    s = document.getSelection();
} else {
    s = '';
};
q=location.href;if(document.getSelection){d=document.getSelection();}else{d='';};p=document.title;void(open('https://pinboard.in/add?url='+encodeURIComponent(q)+'&description='+encodeURIComponent(d)+'&title='+encodeURIComponent(p) + '&tags=2blog 2blog-' + yearNr + '-' + weekNr,'Pinboard','toolbar=no,width=700,height=350'));
