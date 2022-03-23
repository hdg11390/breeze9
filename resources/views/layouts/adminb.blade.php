<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Staghorn's Administration</title>
    <link rel="stylesheet" href="{{ asset('css/adminb.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://cdn.tiny.cloud/1/pzmgh9a7gosb5m7v5qvn1o2gzn5zekaoly3xib32si51086m/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>
    <div class="container">
        <div class="header">
           <img src="{{ asset('images/xsmbanner.jpg') }}" alt="Staghorn Banner">
    </div>
      
        <div class="sidebar">

            <ul>
                <li>Dog's Pages</li>
                 <li><a href="{{ route('dog.create') }}">Create</a></li>
                 <li><a href="{{ route('dog.index') }}">List</a></li>
 
             </ul>
            
            <ul>
               <li>Male Pedigree</li>
                <li><a href="{{ route('mped.create') }}">Create</a></li>
                <li><a href="{{ route('mped.index') }}">List</a></li>

            </ul>

            <ul>
                <li>Female Pedigree</li>
                 <li><a href="{{ route('fped.create') }}">Create</a></li>
                 <li><a href="{{ route('fped.index') }}">List</a></li>
 
             </ul>



        </div>

        <div class="main">
            @yield('content')

        </div>

        <div class="footer">

            
        </div>
      </div>
      <script>
        tinymce.init({
          selector: 'textarea',
          plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
          toolbar_mode: 'floating',
        });
      </script>
    
</body>
</html>