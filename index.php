Place your code here

<script>
 $( ".target" ).click(function() {
	  $('.target').each(function () {
		var id = this.id;
		alert("#first_name"+id);
		alert("#last_name"+id);
		alert("#email"+id);
	});
});
</script>
<?php
/*
Template Name: codeTest
*/


$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

// var_dump($people);
//die();
// echo "</br>"; ?>
<table>
	<?php	$count = 0;
		foreach($people as $person){ 	$count++; ?>
		<tr>
			<?php	foreach($person as $key => $val){ ?>
				<td>
					<input type="hidden" id="<?= $key.$count; ?>" value="<?= $val; ?>">
					<?php	echo $val; ?>
				</td>
			<?php } ?>
			<td>

			<a href="javascript:void(0)" class="target" id='<?= $count; ?>'>Click Me</a></td>
		</tr>
	<?php } ?>
	<a href="#" id="Hello"/>
</table>
