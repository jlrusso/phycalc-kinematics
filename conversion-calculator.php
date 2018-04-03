<?php
  echo "
  <div id='conversion-outer'>
    <div id='conversion-container'>
      <div id='conversion-heading'>Unit Conversions</div>
      <div class='input-option-input'>
        <input type='number' id='unit-input-field' max='999' placeholder='(input)'/>
        <select name='unitConversions' id='unit-converter'>
          <option value='mmToM' id='millimetersToCentimeters' selected>mm to cm</option>
          <option value='mToMm' id='centimetersToMillimeters'>cm to mm</option>
          <option value='cmToM' id='centimetersToMeters'>cm to m</option>
          <option value='mtoCm' id='metersToCentimeters'>m to cm</option>
          <option value='mToKm' id='metersTokilometers'>m to km</option>
          <option value='kmToM' id='kilometersToMeters'>km to m</option>
          <option value='mToMi' id='metersToMiles'>m to mi</option>
          <option value='miToM' id='milesToMeters'>mi to m</option>
          <option value='mToMi' id='metersToMiles'>m to mi</option>
          <option value='kmToMi' id='kilometersToMiles'>km to mi</option>
          <option value='miToKm' id='milesToKilometers'>mi to km</option>
          <option value='ftToYds' id='feetToYards'>ft to yds</option>
          <option value='ydsToFt' id='yardsToFeet'>yds to ft</option>
          <option value='ftToM' id='feetToMeters'>ft to m</option>
          <option value='mToFt' id='metersToFeet'>m to ft</option>
          <option value='inToCm' id='inchesToCentimeters'>in to cm</option>
          <option value='cmToIn' id='centimetersToInches'>cm to in</option>
          <option value='mgToG' id='milligramsToGrams'>mg to g</option>
          <option value='gToMg' id='gramsToMilligrams'>g to mg</option>
          <option value='gToKg' id='gramsToKilograms'>g to kg</option>
          <option value='kgToG' id='kilogramsToGrams'>kg to g</option>
          <option value='lbsToKg' id='poundsToKilograms'>lbs to kg</option>
          <option value='kgToLbs' id='kilogramsToPounds'>kg to lbs</option>
          <option value='km2Tom2' id='kilometerSquaredToSquareMeters'>km² to m²</option>
          <option value='m2ToKm2' id='squareMetersToKilometersSquared'>m² to km²</option>-->
        </select>
        <input type='text' id='unit-output-field' placeholder='(output)' disabled='disabled'>
      </div>
    </div>
  </div>
  ";
?>
