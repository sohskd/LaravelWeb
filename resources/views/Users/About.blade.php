@extends('template.app')

@section('title', 'Dashboard')

@section('page_level_style')
    
@endsection

@section('head')
    
@endsection

@section('content')
<table id="outside">
    <tr><td id="t1">one</td></tr>
    <tr><td id="t2">two</td></tr>
</table>
<table>
	<tr>
		<th>School Name</th>
		<th>Description</th>
	</tr>
	@foreach ($sportsKML->Document->Folder->Placemark as $value)
	<tr>
		<td id="schoolName">{{ $value->name }}</td>
		<td id="coordinates">{{ $value->Point->coordinates }}</td>
	</tr>
	@endforeach
	
</table>
<script>
	var customer = {
 		name : "Tom Smith",
 		speak:function(){
 			return "My name is " + this.name;
 		},
 		address:{
 			street: "123 butterfly ave",
 			city: "Singapore",
 			state: "PA"
 		}
 	};
	document.write(customer.speak() + " " + customer.address.street);
	
	function Person(name, street){
		this.name = name;
		this.street = street;
		
		this.info = function(){
			return "My name is " + this.name + " and I live on " + this.street;
		}
	}
	
	var Bob = new Person("Bob", "76 Butterfly Avenue");
	document.write(Bob.info());
	
</script>

@endsection

@section('page_level_js')
 <script src="scripts/main.js"></script>
      
@endsection

@section('page_level_script')
    
@endsection

 
