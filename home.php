<!DOCTYPE html>
<html lang="en">
<?php 
  include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/fwis/authenticator.php');
  include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/fwis/header.php');
?>
  <body>
<?php
  include_once('navigation.php'); 
?>   <div class="content">
      <div id="content-wrapper">
        <div id="circles-wrapper">
          <div class="box">
            <div class="circle">
              <img src="public/img/hazim.jpg" />
            </div>
            <h3>Hazim</h3>
          </div>
          <div class="box">
            <div class="circle">
              <img src="public/img/lokhman.jpg" />
            </div>
            <h3>Lokhman</h3>
          </div>
          <div class="box">
            <div class="circle">
              <img src="public/img/aiman.jpg" />
            </div>
            <h3>Aiman</h3>
          </div>
        </div>
      </div>
    </div>
<?php
  include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/fwis/footer.php');
?>