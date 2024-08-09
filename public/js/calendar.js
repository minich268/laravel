var day_active, time_obj, date_show;

function initiate(){
    time_obj = document.getElementById('time_obj');
    date_show = document.getElementById('date_show');
    time_obj.style.display = 'none';
    day_active = document.getElementsByClassName('day_active');
    for (var i = 0; i < day_active.length; i++) {
        day_active[i].addEventListener('click', active);
    }
}
function active(){
    let id = this.getAttribute('id');
    console.log(id);
    date_show.innerHTML = id;
    time_obj.style.display = 'block';
}
addEventListener('load', initiate);