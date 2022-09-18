<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fill in-report</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('reportform/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('reportform/css/style.css')}}">
</head>
<body>

    <div class="main">

        <div class="container">

            <form  action="{{route('storeReport')}}"method="POST" class="appointment-form" id="appointment-form">
                
            {{ csrf_field() }}
                        {{ method_field('post') }}


                <h2>please fill in Report</h2>

                <input type="hidden" name="user_id"  value="{{$client->id}}" />

                <div class="form-group-1">

                
                    <input type="text" name="title" id="title" placeholder="Title" required />
                    
                   
                    <div class="select-list">
                        <select name="category" >
                        <option slected value="">Enter category</option>
                            <option  value="category 1">category 1</option>
                            <option value="category 2">category 2</option>
                            <option value="category 3">category 3</option>
                        </select>
                    </div>

                    <div class="select-list">
                        <select name="country" >
                           
                            <option > Enter your country</option>
                            <option  value="United Arab Emirates">United Arab Emirates</option>
                            <option value="Egypt">Egypt</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Oman">Oman</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Sudan">Sudan</option>
                        </select>
                    </div>

                    <div class="form-group">
                    <textarea name="content" placeholder="enter your content"></textarea>
</div>   
    

                </div>
                
               

                          
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Request an Report" />
                </div>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="{{asset('reportform/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('reportform/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>