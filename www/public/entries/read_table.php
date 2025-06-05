<?php
$filePath = "/app/data/data.json";
if (!file_exists($filePath)) {
    $newFile = fopen($filePath, "w+");
    fclose($newFile);
}
$jsonData = file_get_contents($filePath);
$jsonArr = json_decode($jsonData, true);
?>

<!DOCTYPE html>
<html>
    <body>
       <?php $dataCount = 0; ?>
       <section class="section">
            <table class="table is-fullwidth is-striped is-hoverable">
                <thead>
                    <tr class="has-background-grey-lighter">
                        <th>
                            No.
                        </th>
                        <th>
                            Nama
                        </th>
                        <th>
                            NIM
                        </th>
                        <th>
                            Fakultas
                        </th>
                        <th>
                            Jenjang
                        </th>
                        <th>
                            Program Studi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (is_null($jsonArr)) { ?>
                        <tr></tr>
                    <?php } else {
                        foreach ($jsonArr as $data) : array_map('htmlentities', $data) ?>
                        <tr>
                            <td>
                                <?php echo ++$dataCount; ?>
                            </td>
                            <?php foreach ($data as $dataValue) : ?>
                            <td>
                                <?php echo $dataValue; ?>
                            </td>
                            <?php endforeach; ?>
                        </tr>
                        <?php endforeach; 
                    } ?>
                </tbody>
            </table>
       </section>
    </body>
</html>