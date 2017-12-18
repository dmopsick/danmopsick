$(function(){
  showProject("sga");
});

function showProject(projID) {
  // Hide all project displays
  $(".project-section").hide();

  // Display the chosen project
  $("#" + projID).show();
}
