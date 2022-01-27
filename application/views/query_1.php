<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- TABLE -->
    <div class="container">
        <div class="query_wrp">
            <h1>First Query</h1>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">First_name</th>
                    <th scope="col">Last_name</th>
                    <th scope="col">Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($query_data  as $row)
                        {
                            ?>
                                <tr>
                                    <td><?php echo $row['First_name']; ?></td>
                                    <td><?php echo $row['Last_name']; ?></td>
                                    <td><?php echo $row['Salary']; ?></td>
                                </tr>
                            <?
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="query_wrp">
            <h1>Second Query</h1>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">First_name</th>
                    <th scope="col">Last_name</th>
                    <th scope="col">Reward points</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($employee_rewards  as $row)
                        {
                            ?>
                                <tr>
                                    <td><?php echo $row['First_name']; ?></td>
                                    <td><?php echo $row['Last_name']; ?></td>
                                    <td><?php echo $row['amount']; ?></td>
                                </tr>
                            <?
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="query_wrp">
            <h1>Third Query</h1>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">First_name</th>
                    <th scope="col">Last_name</th>
                    <th scope="col">Joining_date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($join_date  as $row)
                        {
                            ?>
                                <tr>
                                    <td><?php echo $row['First_name']; ?></td>
                                    <td><?php echo $row['Last_name']; ?></td>
                                    <td><?php echo $row['Joining_date']; ?></td>
                                </tr>
                            <?
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>