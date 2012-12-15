<h1><font color="#1e90ff">Write Your tweet!</font></h1>
<form class="tweet" method="post">

    <textarea name="tweet" rows="3" placeholder="English, motherfucker, do you speak it?"></textarea>
    <br />
    <button class="btn btn-medium btn-primary" type="submit">Tweet</button>

</form>

    <h2>My tweets</h2>
        <table class="tabel table-striped table-bordered">
           <thead>
           <tr>
               <th>Time</th>
               <th>Tweet</th>
           </tr>
           </thead>
            <tbody>
            <?php
            foreach( $tweets as $tweet): ?>

            <tr>
                <td><?php echo $tweet->created?></td>
                <td><?php echo $tweet->content?></td>

            </tr>
            <?php endforeach?>

            </tbody>


        </table>