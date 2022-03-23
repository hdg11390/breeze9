<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male Pedigrees</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
</head>
<body>
    
<div style="max-width: 1280px">
    <div style="margin: auto">
    <table id="example" class="stripe hover" style="width:100%">
        <thead>
            <tr>
                <th>Call Name</th>
                <th>Registered Name</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
                
            </tr>
        </thead>
        <tbody>
         @foreach ($mpeds as $mped )
             
            <tr>
                <td>{{ $mped->callName }}</td>
                <td>{{ $mped->regName }}</td>
                <td>View</td>
                <td>Edit</td>
                <td>Delete</td>
                
            </tr>
        @endforeach

        </tbody>
        <tfoot>
            <tr>
                <th>Call Name</th>
                <th>Registered Name</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </tfoot>
    </table>
</div>
</div>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>