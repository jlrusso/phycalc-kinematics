<?php
  echo "
  <div id='calculator-container'>
    <div class='calculator-whole'>
      <input type='text' id='input-field'>
      <div class='row'>
        <div class='col-half'>
          <div id='radians-container'>
            <button type='button' id='radians-btn'>Radians</button>
            <span id='radians-indicator'></span>
          </div>
        </div>
        <div class='col-half'>
          <div id='degrees-container'>
            <button type='button' id='degrees-btn'>Degrees</button>
            <span id='degrees-indicator'></span>
          </div>
        </div>
      </div>
      <div class='row'>
        <div class='col-fourth'>
          <button type='button' class='trig-btn'>sin</button>
        </div>
        <div class='col-fourth'>
          <button type='button' class='trig-btn'>cos</button>
        </div>
        <div class='col-fourth'>
          <button type='button' class='trig-btn'>tan</button>
        </div>
        <div class='col-fourth'>
          <button type='button' class='reg-btn pi-btn'>&pi;</button>
        </div>
      </div>
      <div class='row'>
        <div class='col-fourth'>
          <button type='button' class='trig-btn'>sin<sup>-1</sup></button>
        </div>
        <div class='col-fourth'>
          <button type='button' class='trig-btn'>cos<sup>-1</sup></button>
        </div>
        <div class='col-fourth'>
          <button type='button' class='trig-btn'>tan<sup>-1</sup></button>
        </div>
        <div class='col-fourth'>
          <button type='button' class='reg-btn'>/</button>
        </div>
      </div>
      <div class='row'>
        <div class='col-fourth'>
          <button type='button' class='reg-btn'>7</button>
        </div>
        <div class='col-fourth'>
          <button type='button' class='reg-btn'>8</button>
        </div>
        <div class='col-fourth'>
          <button type='button' class='reg-btn'>9</button>
        </div>
        <div class='col-fourth'>
          <button type='button' class='reg-btn'><b>*</b></button>
        </div>
      </div>
      <div class='row'>
        <div class='col-fourth'>
          <button type='button' class='reg-btn'>4</button>
        </div>
        <div class='col-fourth'>
          <button type='button' class='reg-btn'>5</button>
        </div>
        <div class='col-fourth'>
          <button type='button' class='reg-btn'>6</button>
        </div>
        <div class='col-fourth'>
          <button type='button' class='reg-btn'>-</button>
        </div>
      </div>
      <div class='row'>
        <div class='col-fourth'>
          <button type='button' class='reg-btn'>1</button>
        </div>
        <div class='col-fourth'>
          <button type='button' class='reg-btn'>2</button>
        </div>
        <div class='col-fourth'>
          <button type='button' class='reg-btn'>3</button>
        </div>
        <div class='col-fourth'>
          <button type='button' class='reg-btn'>+</button>
        </div>
      </div>
      <div class='row'>
        <div class='col-fourth'>
          <button type='button' class='reg-btn'>0</button>
        </div>
        <div class='col-fourth'>
          <button type='button' class='reg-btn'><b>.</b></button>
        </div>
        <div class='col-fourth'>
          <button type='button' id='square-btn'>x<sup>2</sup></button>
        </div>
        <div class='col-fourth'>
          <button type='button' id='nth-power'>x<sup>n</sup></button>
        </div>
      </div>
      <div class='row'>
        <div class='col-fourth'>
          <button type='button' id='square-root-btn'>&radic;</button>
        </div>
        <div class='col-fourth'>
          <button type='button' class='reg-btn'>(</button>
        </div>
        <div class='col-fourth'>
          <button type='button' class='reg-btn'>)</button>
        </div>
        <div class='col-fourth'>
          <button type='button' id='ten-power'>EE</button>
        </div>
      </div>
      <div class='row'>
        <div class='col-fourth'>
          <button type='button' id='calculator-calculate-btn'>=</button>
        </div>
        <div class='col-fourth'>
          <button type='button' id='calculator-clear-btn'>Clear</button>
        </div>
        <div class='col-fourth'>
          <button type='button' id='delete-btn'>Del</button>
        </div>
        <div class='col-fourth'>
          <input type='number' id='sig-fig-field' placeholder='SD#'/>
        </div>
      </div>
    </div>
    <div id='calculator-tooltip'></div>
  </div>
  ";
?>
