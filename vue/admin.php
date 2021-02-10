<?php $title = "Admin-Cutsy Barbershop"; ?>
<?php ob_start() ?>
<main>
    <div id="head">
        <div id="head_overlay">
            <h2><span>Cutsy</span> Barbershop</h2>
        </div>
    </div>
    <div id="main_body">
        <table>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
</main>

<?php $content = ob_get_clean(); ?>
<?php require_once('./vue/template.php'); ?>