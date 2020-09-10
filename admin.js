function dashboard() {
    document.getElementById('Dashboard').style.display='block';
    document.getElementById('reg_user').style.display='none';
    document.getElementById('manage_food_cat').style.display='none';
}
function reg_user() {
      document.getElementById('Dashboard').style.display='none';
      document.getElementById('reg_user').style.display='block';
      document.getElementById('manage_food_cat').style.display='none';
}
function manage_food_cat() {
    document.getElementById('Dashoboard').style.display='none';
    document.getElementById('manage_food_cat').style.display='block';
    document.getElementById('reg_user').style.display='none';
}

