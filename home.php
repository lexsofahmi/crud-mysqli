<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">User List</div>
            <div class="panel-body">

                    <span data-placement="right" data-toggle="tooltip" title="Tambah User">
                        <a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary" id="btn-primary"><i
                                class="fa fa-plus"> <i class="fa fa-user"></i></i></a>
                    </span>

                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th class="row-col-centered">No</th>
                            <th class="col-lg-4 row-col-centered">Username</th>
                            <th class="col-lg-4 row-col-centered">Password</th>
                            <th class="row-col-centered">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        $result = $user->read();
                        foreach ($result as $loop) {?>
                            <tr>
                                <td class="row-col-centered"><?php echo $no++ ?></td>
                                <td class="row-col-centered"><?php echo $loop['username'] ?></td>
                                <td class="row-col-centered"><?php echo $loop['password'] ?></td>
                                <td class="row-col-centered">
                                    <a href="#" class="btn btn-info btn-sm"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-search"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        <?php }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>