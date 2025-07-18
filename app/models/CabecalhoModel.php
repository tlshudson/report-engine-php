<?php
class MotoristaModel {
    public function listar() {
        $conn = getOracleConnection();
        $sql = "SELECT NOME, CPF FROM MOTORISTAS";
        $stid = oci_parse($conn, $sql);
        oci_execute($stid);

        $result = [];
        while ($row = oci_fetch_assoc($stid)) {
            $result[] = $row;
        }
        oci_close($conn);
        return $result;
    }
}
