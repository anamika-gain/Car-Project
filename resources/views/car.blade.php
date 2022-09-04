<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
    <style>
       
      
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
 
<div class="container">
    <div class="card">
        <div class="card-header">
            <form action="{{ route('filter') }}" method="GET" style="margin-top: 20px;" >
                
    			<select name="brand_id" id="input"  onchange="getModels(this.value)">
    				<option value="0">Select brand</option>
    				@foreach (\App\Models\Brand::select('id','brand_name')->get() as $brands)
    					<option value="{{ $brands->id }}" >
    					{{ $brands['brand_name'] }}
    				    </option>
    				@endforeach
    			</select>
    			<select name="model_id" id="modelsHolder">
    				<option value="0">Select Model</option>
    				@foreach (\App\Models\CarModel::select('id','model_name')->get() as $car_model)
					<option value="{{ $car_model->id }}">
					{{ $car_model['model_name'] }}
				    </option>
				    @endforeach
    			</select>
                <select name="min_price" id="input">
    				<option value="0">Select minimum price</option>
    					<option> 1000.00 </option>
                        <option> 2000.00 </option>
                        <option> 3000.00 </option>
                        <option> 4000.00 </option>
                        <option> 5000.00 </option>
    			</select>
                <select name="max_price" id="input">
    				<option value="0">Select maximum price</option>               
                    <option> 6000.00 </option>
                    <option> 7000.00 </option>
                    <option> 8000.00 </option>
                    <option> 9000.00 </option>
                    <option> 10000.00 </option>
    			</select>
	    		<input type="submit" class="btn btn-danger btn-sm" value="Filter">
	    	</form>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No :</th>
            <th scope="col">Car Name</th>
            <th scope="col">Brand Name</th>
            <th scope="col">Model</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody>
            <?php
            $i=1
            ?>
        @foreach ($car as $item)

          <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$item->car_name}}</td>
            @php
            $brandds= DB::table('brands')->where('id',"=",$item->brand_id)->first();
            @endphp
            <td>{{$brandds->brand_name}}</td>
            @php
            $modells= DB::table('car_models')->where('id',"=",$item->model_id)->first();
            @endphp
            <td>{{$modells->model_name}}</td>
            <td>{{$item->price}}</td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"
    crossorigin="anonymous"></script>


<script type="text/javascript">
      function getModels(id) {
            var appUrl = "{{ URL::to('/') }}";
            $.get(appUrl + "/get/models/" + id, function(models) {
                var pp = `<option value="0">Select Model</option>`;
                for (var i in models) {
                    pp = pp + `<option value="` + models[i]['id'] + `">` + models[i]['model_name'] +
                        `</option>`;
                }
                $('#modelsHolder').html(pp);
            });
        }
</script>
</body>
</html>
