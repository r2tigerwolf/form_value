<html>
    <head>
    <script src="js/form_value.js"></script>
    </head>
    <body>
        <input id="text_id" class="text_class" value="this is the input value" />
        <br/>
        <br/>
        <div id="div_id" class="div_class">this is the div value</div>
        <br/>        
        <span id="span_id" class="span_class">this is the span value</span>
        <br/>
        <br/>
        <select id="select_id" class="select_class">
            <option value="1">test1</option>
            <option value="2" selected="selected">selected option 2</option>
            <option value="3">test3</option>
        </select>
        <br/>
        <br/>
        <input type="radio" id="child" name="radio_name" value="child">
        <label for="child">17 years or younger</label><br>
        <input type="radio" id="adult" name="radio_name" value="adult" checked>
        <label for="adult">18 - 64 years</label><br>
        <input type="radio" id="senior" name="radio_name" value="senior">
        <label for="adult">Senior</label>        
        <br/>
        <br/>
        <input type="checkbox" name="checkbox_name" value="HTML"> HTML<br>
        <input type="checkbox" name="checkbox_name" value="CSS" checked> CSS<br>
        <input type="checkbox" name="checkbox_name" value="JavaScript"> JavaScript<br>
        <input type="checkbox" name="checkbox_name" value="PHP"> PHP<br>
        <input type="checkbox" name="checkbox_name" value="Python" checked> Python<br>
        <input type="checkbox" name="checkbox_name" value="Ruby" checked> Ruby<br>

        <ul id="bullet_id" class="bullet_class">
            <li>bullet 1</li>
            <li>bullet 2</li>
            <li>bullet 3</li>
        </ul>

        <button type="button" id="button_id" class="button_class">Click Me!</button>

        
        <div id="textboxcontainer"></div>
        <div id="editable_id" class="editable_class" name="editable_name">test</div>

        <textarea id="textarea_id" name="textarea_name" class="textarea_class" rows="4" cols="50">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
        </textarea>
        
    </body>
</html>