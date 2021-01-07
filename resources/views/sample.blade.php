<!DOCTYPE html>
<html>
    <title> Template Generation </title>
    <link rel ="stylesheet" href="{{asset('css/sample.css')}}" type="text/css"/>
    <body>
        <div id='app'>
            <div class="container">
                    <form action ="Template" method="POST" enctype="multipart/form-data">
                        <label for="templates"> Select Template </label>
                        {{@csrf_field()}}
                        <select name="template">    
                            <option value="T1">T1</option>
                            <option value="T2">T2</option>
                            <option value="T3">T3</option>
                            <option value="T4">T4</option>
                        </select>
                        <button type="submit" name="generate"> Show </button>
                    </form>
                </div>
        </div>
    </body>
</html>

