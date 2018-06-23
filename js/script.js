// $("#frmTry").submit(function(e){
//  e.preventDefault();
//  $.ajax({
//    type: 'POST',
//    url: 'asd/asd.php',
//    data: $(this).serialize(),
//    success:function(response){
//      $("body").append(response)
//    }
//  })
// })
// $("table").DataTable()
$(document).ready(function() {
  $('#smartwizard').smartWizard({
    theme: "circles",
    // keyNavigation: false,
    useURLhash: false,
    transitionEffect: "fade"
  })
  var width = 0
  $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
    switch (stepNumber) {
      case 0:
        break
      case 1:
        break
      case 2:
        break
      case 3:
        break
    }
  });
  $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
    $(".glow").removeClass("glow")
    width += stepDirection == "forward" ? 22.5 : -22.5
    $("#animate").animate({
      width: `${width}%`
    }, 500, function() {
      $(`a[href="#step-${stepNumber+1}"] i`).addClass("glow")
      console.log(stepNumber)
    })
  });
  $(".calendar").pignoseCalendar({
    multiple: true,
    minDate: moment().add(-1, 'days'),
    select: function(date, context) {
      var a = moment(date[0]._d).format("YYYY-MM-DD")
      var b = moment(date[1]._d).format("YYYY-MM-DD")
      $("td.txtCheckInDate ").html(a)
      $("td.txtCheckOutDate").html(b)
      $("td.txtNoOfNights").html(moment(b).diff(moment(a), 'days'))
    }
  });
  $("#loading").fadeOut()
})
$(window).on('resize', function() {
  // if mobile
  if (!($(window).width() < 480 || $(window).height() < 480)) {
    $(".navbar-collapse").collapse("hide")
  }
})
$("#frmLogin").submit(function(e) {
  e.preventDefault()
  $.ajax({
    context: this,
    type: 'POST',
    url: 'ajax/login.php',
    data: $(this).serialize(),
    success: function(response) {
      if (response == true) {
        alert("Login Successfully!")
        location.reload()
      } else {
        alert("Invalid Username and/or Password.")
        $(this).find("input").first().focus()
      }
    }
  })
})