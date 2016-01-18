<?php
?>
<form>
    <fieldset class="form-group">
        <label for="S_p_name">Project Name</label>
        <input type="text" class="form-control" id="S_p_name" name="S_p_name" placeholder="Enter Project Name">
    </fieldset>
    <fieldset class="form-group">
        <label for="S_p_desc">Project Description</label>
        <textarea class="form-control" id="S_p_desc" name="S_p_desc" rows="3"></textarea>
    </fieldset>
    <fieldset class="form-group">
        <label for="S_p_tech">Project Technologies</label>
        <textarea class="form-control" id="S_p_tech" name="S_p_tech" rows="3"></textarea>
    </fieldset>
    <fieldset class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" class="form-control-file" id="exampleInputFile">
        <small class="text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
    </fieldset>
    <div class="radio">
        <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
            Option one is this and that&mdash;be sure to include why it's great
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Option two can be something else and selecting it will deselect option one
        </label>
    </div>
    <div class="radio disabled">
        <label>
            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
            Option three is disabled
        </label>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox"> Check me out
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
