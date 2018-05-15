<?php
require_once "header.php";
require_once "modal.php";
?>
<div style="background-color:white;position:fixed;z-index:100;height:100%;width:100%;margin-top:-10px" id="loading"></div>
<h1 style="width:100%;background-color:#1abc9c;color:white;text-align:center;margin-top:6px;text-shadow:2px 2px black;font-weight:bold;height:70px;line-height:66px">RIO VILLA NUEVO</h1>
<div style="background-color:white;padding:5%">
  <form action="">
    <div id="smartwizard">
      <ul>
        <div id="animate" style="position:absolute;background-color:#5cb85c;height:5px;top:0;top:66px;left:195px"></div>
        <li class="step"><a href="#step-1"><i class="fa fa-calendar-o fa-2x glow" style="line-height:20px"></i><br /><small>CHECK IN &amp; CHECK OUT</small></a></li>
        <li class="step"><a href="#step-2"><i class="fa fa-bed fa-2x" style="line-height:20px"></i><br /><small>ROOM &amp; RATES</small></a></li>
        <li class="step"><a href="#step-3"><i class="fa fa-user fa-2x" style="line-height:20px"></i><br /><small style="left:-4px"><span style="margin-left:10px">GUEST</span><br>INFORMATION</small></a></li>
        <li class="step"><a href="#step-4"><i class="fa fa-check fa-2x" style="line-height:20px"></i><br /><small style="left:-10px"><span style="margin-left:17px">BOOKING</span><br>CONFIRMATION</small></a></li>
      </ul>
      <div>
        <div id="step-1">
          <div class="col-md-9">
            <div class="calendar"></div>
          </div>
          <div class="col-md-3">
            <table class="leftSideTable">
              <thead>
                <th colspan="2">BOOKING SUMMARY</th>
              </thead>
              <tbody>
                <tr>
                  <td>Check In Date</td>
                  <td class="txtCheckInDate"></td>
                </tr>
                <tr>
                  <td>Check Out Date</td>
                  <td class="txtCheckOutDate"></td>
                </tr>
                <tr>
                  <td>Number of Nights</td>
                  <td class="txtNoOfNights"></td>
                </tr>
              </tbody>
            </table>
            <br>
            <table class="leftSideTable">
              <thead>
                <th colspan="2">GUEST INFORMATION</th>
              </thead>
              <tbody>
                <tr>
                  <td>Adults</td>
                  <td><input type="number" name="txtAdults" class="form-control" min="1" value="1"></td>
                </tr>
                <tr>
                  <td>Children</td>
                  <td><input type="number" name="txtChildren" class="form-control" min="0" value="0"></td>
                </tr>
                <tr>
                  <td>Toddlers</td>
                  <td><input type="number" name="txtToddlers" class="form-control" min="0" value="0"></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div id="step-2">
          Step Content
        </div>
        <div id="step-3">
          Step Content
        </div>
        <div id="step-4">
          Step Content
        </div>
      </div>
    </div>
  </form>
</div>
<?php require_once "footer.php";?>