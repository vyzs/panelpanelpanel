<?php
require_once '../app/require.php';
require_once '../app/controllers/AdminController.php';

$user = new UserController;
$admin = new AdminController;

Session::init();

$username = Session::get("username");

$userList = $admin->getUserArray();

Util::adminCheck();
Util::head('admin panel > users');
Util::navbar();

// if post request
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{

    if (isset($_POST["resetHWID"]))
    {
        $rowUID = $_POST['resetHWID'];
        $admin->resetHWID($rowUID);
    }

    if (isset($_POST["setBanned"]))
    {
        $rowUID = $_POST['setBanned'];
        $admin->setBanned($rowUID);
    }

    if (isset($_POST["setAdmin"]))
    {
        $rowUID = $_POST['setAdmin'];
        $admin->setAdmin($rowUID);
    }

    header("location: users.php");

}

?>

<script src="https://kit.fontawesome.com/fcdd61e14e.js" crossorigin="anonymous"></script>

<div class="main">
    <span>admin</span>
    <br>
    <br>
        <div class="panel-card">
			<table class="table">
				<thead>
					<tr>
						<th scope="col" class="text-center">uid</th>

						<th scope="col">name</th>

						<th scope="col" class="text-center">admin </th>

						<th scope="col" class="text-center">banned</th>

						<th scope="col">actions</th>

					</tr>
				</thead>


				<tbody>

					<!--Loop for number of rows-->
					<?php foreach ($userList as $row): ?>
						<tr>
							<th scope="row" class="text-center"><?php Util::display($row->uid); ?></th>
							<td><?php Util::display($row->username); ?></td>
							
							<td class="text-center">
								<?php if ($row->admin == 1): ?>
                            <i id="tick-mark"></i>
								<?php
    else: ?>
									<b class="center">x</b>
								<?php
    endif; ?>
							</td>

							<td class="text-center">
								<?php if ($row->banned == 1): ?>
                            <i id="tick-mark"></i>
								<?php
    else: ?>
									<b class="center">x</b>
								<?php
    endif; ?>
							</td>

							<td>
								<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
									<button value="<?php Util::display($row->uid); ?>" name="resetHWID"  title="reset hwid" data-toggle="tooltip" data-placement="top" class="btn btn-sm text-white" type="submit">
                                        <i class="fas fa-microchip"></i>									
                                    </button>
									<button value="<?php Util::display($row->uid); ?>" name="setBanned"  title="ban/unban" data-toggle="tooltip" data-placement="top" class="btn btn-sm text-white" type="submit">
                                        <i class="fas fa-ban"></i>									
                                    </button>
									<button value="<?php Util::display($row->uid); ?>" name="setAdmin"  title="toggle admin" data-toggle="tooltip" data-placement="top" class="btn btn-sm text-white" type="submit">
										<i class="fas fa-crown"></i>
									</button>

								</form>
							</td>

						</tr>
					<?php
endforeach; ?>

				</tbody>

			</table>
		</div>
	</div>

</div>
<?php Util::footer(); ?>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
