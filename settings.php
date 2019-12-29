<?php
/* 
 *	Settings Page for Module 
 *	
 *	This is included into a full page wrapper to be displayed. 
 */
?>

<!-- BEGIN FORM CONTENTS -->
	<fieldset>
		<input id="server" type="hidden" name="server" value="<?php echo $moduleSettings['server']; ?>">
		<input id="link" type="hidden" name="link" value="<?php echo $moduleSettings['link']; ?>">
		
		<legend>Airport Settings</legend>

		  <div class="control-group">
			<label class="control-label" for="airports_list">Airports</label>
			<div class="controls">
			  <input class="input-xlarge" id="airports_list" type="text" name="airports_list" value="<?php echo $moduleSettings['airports_list']; ?>">
			</div>
		    <span class="help-inline">(ESSB,EDDP,SKSM,EDDS,EDDM,EDDF,KJAC,KTOL)</span>
		  </div>
	
		  <div class="control-group">
			<label class="control-label" for="airport_default">Default Airport</label>
			<div class="controls">
			  <input class="input-xlarge" id="airport_default" type="text" name="airport_default" value="<?php echo $moduleSettings['airport_default']; ?>">
			</div>
		    <span class="help-inline">List the abbreviation of one of the airports above to read when module starts.</span>
		  </div>


		<legend>Module Settings</legend>

		  <div class="control-group">
			<label class="control-label" for="timeout_min">Time Out</label>
			<div class="controls">
			  <input class="input-xlarge" id="timeout_min" type="text" name="timeout_min" value="<?php echo $moduleSettings['timeout_min']; ?>">
			</div>
		    <span class="help-inline">Timeout in minutes</span>
		  </div>

	</fieldset>					
	
<!-- END FORM CONTENTS -->