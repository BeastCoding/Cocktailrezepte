<?php
switch ($key['Einheit']) {
    case 'Gramm':
        echo '<select class="cloneInputEinheit" name="einheit[]" size="1" id="einheiten_1">
            <option class="feldgroesse" value="Gramm">Gramm</option>
            <option class="feldgroesse" value="cl">cl</option>
            <option class="feldgroesse" value="Stück">Stück</option>
            <option class="feldgroesse" value="Scheibe">Scheibe</option>
            <option class="feldgroesse" value="ml">ml</option>
            <option class="feldgroesse" value="Prise">Prise</option>
            <option class="feldgroesse" value="EL">EL</option>
        </select>';
        break;
    case 'cl':
    echo '<select class="cloneInputEinheit" name="einheit[]" size="1" id="einheiten_1">
        <option class="feldgroesse" value="cl">cl</option>
        <option class="feldgroesse" value="Stück">Stück</option>
        <option class="feldgroesse" value="Scheibe">Scheibe</option>
        <option class="feldgroesse" value="ml">ml</option>
        <option class="feldgroesse" value="Prise">Prise</option>
        <option class="feldgroesse" value="EL">EL</option>
        <option class="feldgroesse" value="Gramm">Gramm</option>
    </select>';
        break;
    case 'Stück':
    echo '<select class="cloneInputEinheit" name="einheit[]" size="1" id="einheiten_1">
        <option class="feldgroesse" value="Stück">Stück</option>
        <option class="feldgroesse" value="Scheibe">Scheibe</option>
        <option class="feldgroesse" value="ml">ml</option>
        <option class="feldgroesse" value="Prise">Prise</option>
        <option class="feldgroesse" value="EL">EL</option>
        <option class="feldgroesse" value="Gramm">Gramm</option>
        <option class="feldgroesse" value="cl">cl</option>
    </select>';
        break;
    case 'Scheibe':
    echo '<select class="cloneInputEinheit" name="einheit[]" size="1" id="einheiten_1">
        <option class="feldgroesse" value="Scheibe">Scheibe</option>
        <option class="feldgroesse" value="ml">ml</option>
        <option class="feldgroesse" value="Prise">Prise</option>
        <option class="feldgroesse" value="EL">EL</option>
        <option class="feldgroesse" value="Gramm">Gramm</option>
        <option class="feldgroesse" value="cl">cl</option>
        <option class="feldgroesse" value="Stück">Stück</option>
    </select>';
        break;
    case 'ml':
    echo '<select class="cloneInputEinheit" name="einheit[]" size="1" id="einheiten_1">
        <option class="feldgroesse" value="ml">ml</option>
        <option class="feldgroesse" value="Prise">Prise</option>
        <option class="feldgroesse" value="EL">EL</option>
        <option class="feldgroesse" value="Gramm">Gramm</option>
        <option class="feldgroesse" value="cl">cl</option>
        <option class="feldgroesse" value="Stück">Stück</option>
        <option class="feldgroesse" value="Scheibe">Scheibe</option>
    </select>';
        break;
    case 'Priese':
    echo '<select class="cloneInputEinheit" name="einheit[]" size="1" id="einheiten_1">
        <option class="feldgroesse" value="Prise">Prise</option>
        <option class="feldgroesse" value="EL">EL</option>
        <option class="feldgroesse" value="Gramm">Gramm</option>
        <option class="feldgroesse" value="cl">cl</option>
        <option class="feldgroesse" value="Stück">Stück</option>
        <option class="feldgroesse" value="Scheibe">Scheibe</option>
        <option class="feldgroesse" value="ml">ml</option>
    </select>';
        break;
    case 'EL':
    echo '<select class="cloneInputEinheit" name="einheit[]" size="1" id="einheiten_1">
        <option class="feldgroesse" value="EL">EL</option>
        <option class="feldgroesse" value="Gramm">Gramm</option>
        <option class="feldgroesse" value="cl">cl</option>
        <option class="feldgroesse" value="Stück">Stück</option>
        <option class="feldgroesse" value="Scheibe">Scheibe</option>
        <option class="feldgroesse" value="ml">ml</option>
        <option class="feldgroesse" value="Prise">Prise</option>
    </select>';
        break;
}
?>
