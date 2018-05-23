<html>
<head>
</head>
<body>
<h2>Hello Admin, </h2><br>
<table id="daftar_barang" class="minimalistBlack">
	<!-- <caption>table title and/or explanatory text</caption> -->
	<thead>
		<tr id="daftar_barang">
			<th id="daftar_barang">Id</th><th id="daftar_barang">Title</th><th id="daftar_barang">Author</th><th id="daftar_barang">Date</th><th id="daftar_barang">Page</th><th id="daftar_barang">Type</th><th id="daftar_barang">Operasi</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($books as $u){?>
		<tr>
			<td id="daftar_barang"><?php echo $u->id_book ?></td><td id="daftar_barang"><?php echo $u->title ?></td><td id="daftar_barang"><?php echo $u->author ?></td><td id="daftar_barang"><?php echo $u->date_published ?></td><td id="daftar_barang"><?php echo $u->number_page ?></td><td id="daftar_barang"><?php echo $u->type ?></td><td id="daftar_barang"><a href="<?php base_url()?>home_admin_login/update_barang/<?php echo $u->id_book?>">Update</a>&nbsp;&nbsp;&nbsp;<a href="<?php base_url()?>home_admin_login/delete_barang/<?php echo $u->id_book?>">Delete</a></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<br><br>

<?php if(count($data)>0){?>
	<form method="post" action="<?php echo base_url()?>home_admin_login/process_update_barang">
<?php foreach($data as $u){ ?>
<table>
		<tr>
		<td>Id Book: </td><td><input type="text" name="id_book" value="<?php echo $u->id_book; ?>" readonly></td>
		</tr>
		<tr>
		<td>Author: </td><td><input type="text" name="author" value="<?php echo $u->author; ?>" required></td>
		</tr>
		<tr>
		<td>Title: </td><td><input type="text" name="title" value="<?php echo  $u->title; ?>" required></td>
		</tr>
		<tr>
		<td>Date Published: </td><td><input type="text" name="date_published" value="<?php echo  $u->date_published; ?>" required></td>
		</tr>
		<tr>
		<td>Number Of Pages: </td><td><input type="text" name="number_page" value="<?php echo  $u->number_page; ?>" required></td>
		</tr>
		<tr>
		<td>Type Of Book: </td><td><select name="type">
							  <option value="novel" <?php if ($u->type == 'novel') { echo 'selected="selected"';}?>>novel</option>
							  <option value="documentation" <?php if ($u->type == 'documentation') { echo 'selected="selected"';}?>>documentation</option>
							  <option value="other" <?php if ($u->type == 'other') { echo 'selected="selected"';}?>>other</option>
							</select>
						</td>
		</tr>
		<tr>
		<td><input type="submit" value="Update"></td><td><a href="<?php echo base_url()?>home_admin">Cancel Update</a></td>
		</tr>
</table>
<?php }?>
</form>
<?php } else { ?>
	<form method="post" action="<?php base_url()?>home_admin_login/insert_barang">
		<table>
		<tr>
		<td>Author: </td><td><input type="text" name="author" required></td>
		</tr>
		<tr>
		<td>Title: </td><td><input type="text" name="title" required></td>
		</tr>
		<tr>
		<td>Date Published: </td><td><input type="date" name="date_published" required></td>
		</tr>
		<tr>
		<td>Number Of Pages: </td><td><input type="number" min="1" name="number_page" required></td>
		</tr>
		<tr>
		<td>Type Of Book: </td><td><select name="type" >
							  <option value="novel">novel</option>
							  <option value="documentation">documentation</option>
							  <option value="other">other</option>
							</select>
						</td>
		</tr>
		<td><input type="submit" value="Insert"></td>
		</tr>
		</table>
	</form>
	<a href="<?php base_url()?>home_admin_login/logout_admin">Logout</a>	
<?php } ?>
</body>
<style type="text/css" media="screen">
			table.minimalistBlack {
		  border: 3px solid #000000;
		  width: 75%;
		  text-align: left;
		  border-collapse: collapse;
		}
		table.minimalistBlack td, table.minimalistBlack th {
		  border: 1px solid #000000;
		  padding: 5px 4px;
		}
		table.minimalistBlack tbody td {
		  font-size: 13px;
		}
		table.minimalistBlack thead {
		  background: #CFCFCF;
		  background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
		  background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
		  background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
		  border-bottom: 3px solid #000000;
		}
		table.minimalistBlack thead th {
		  font-size: 15px;
		  font-weight: bold;
		  color: #000000;
		  text-align: left;
		}
		table.minimalistBlack tfoot {
		  font-size: 14px;
		  font-weight: bold;
		  color: #000000;
		  border-top: 3px solid #000000;
		}
		table.minimalistBlack tfoot td {
		  font-size: 14px;
		}
</style>
</html>