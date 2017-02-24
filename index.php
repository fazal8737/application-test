Place your code here
<?php 

$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

?>
<table>
	<th>id</th>
	<th>first_name</th>
	<th>last_name</th>
	<th>email</th>
	<th>Action Button</th>
		<?php foreach($people as $key => $value){ ?>
				<tr>
					<?php echo $key['id']; ?>
				</tr>
				<tr>
					<?php echo $key['first_name']; ?>
				</tr>
				<tr>
					<?php echo $key['last_name']; ?>
				</tr>
				<tr>
					<?php echo $key['email']; ?>
				</tr>
				<tr>
					<a href="#" id="functionButton(<?php echo $key['id']; ?>)"><?php echo 'Click me'; ?></a>
				</tr>
			<?php } ?>
</table>

<script type="text/javascript">
function functionButton(id){
	if(id == '1'){
		alert("John "+ "Smith" + "john.smith@hotmail.com");
	}
	else if(id == '2'){
		alert("pail "+ "allen" + "paul.allen@microsoft.com");
	}
	else if(id == '3'){
		alert("james "+ "johnston" + "james.johnston@gmail.com");
	}
	else if(id == '4'){
		alert("steve "+ "buscemi" + "steve.buscemi@yahoo.com");
	}
	else if(id == '5'){
		alert("doug "+ "simons" + "doug.simons@hotmail.com");
	}
}

</script>
