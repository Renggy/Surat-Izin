<?php

require __DIR__ . '/vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $template = new \PhpOffice\PhpWord\TemplateProcessor('template/template.docx');
    $orangtua = $_POST['parent_name'];
    $template->setValues([
        'parent_name'       => $_POST['parent_name'] ?? '-',
        'parent_birthplace' => $_POST['parent_birthplace'] ?? '-',
        'parent_date_birth' => $_POST['parent_date_birth'] ? date('d F Y', strtotime($_POST['parent_date_birth'])) : '-',
        'parent_jobs'       => $_POST['parent_jobs'] ?? '-',
        'parent_address'    => $_POST['parent_address'] ?? '-',
        'child_name'        => $_POST['child_name'] ?? '-',
        'child_birthplace'  => $_POST['child_birthplace'] ?? '-',
        'child_date_birth'  => $_POST['child_date_birth'] ? date('d F Y', strtotime($_POST['child_date_birth'])) : '-',
        'child_gender'      => $_POST['child_gender'] == 1 ? "Laki - Laki" : "Perempuan",
        'child_address'     => $_POST['child_address'] ?? '-',
        'perihal_izin'      => $_POST['perihal_izin'] ?? '-',
        'status_izin'       => $_POST['status_izin'] == 1 ? "mengizinkan" : "tidak mengizinkan",
        'ttd_location'      => $_POST['ttd_location'] ?? '-',
        'ttd_date'          => $_POST['ttd_date'] ? date('d F Y', strtotime($_POST['ttd_date'])) : '-',
        'orang_tua'         => ucwords(strtolower($orangtua)),
    ]);
    $nameFile = md5(uniqid(rand(), true)) . ".docx";
    $template->saveAs($nameFile);

    // Download File
    header('Content-Description: File Transfer');
    header("Content-Disposition: attachment; filename={$nameFile}");
    header("Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
    readfile($nameFile);
    unlink($nameFile);
}
