<?php
    
    require_once("conexao.php");

    class Site{
        
        //lista rdx1
        public function ListarRdx1(){
            $sql = "SELECT * FROM rdx1 INNER JOIN membro ON rdx1.idMembro = membro.idMembro ORDER BY pontuacaoRdx1 DESC";
            $conexao = Conexao::LigarConexao();
            $conexao->exec("SET NAMES utf8");

            $resultado = $conexao->query($sql);
            $lista = $resultado->fetchAll();
            return $lista;
        }

        //lista mvp
        public function ListarMvp(){
            $sql = "SELECT * FROM mvp INNER JOIN membro ON mvp.idMembro = membro.idMembro ORDER BY mvpJg DESC";
            $conexao = Conexao::LigarConexao();
            $conexao->exec("SET NAMES utf8");

            $resultado = $conexao->query($sql);
            $lista = $resultado->fetchAll();
            return $lista;
        }

        //lista dogTag
        public function ListarDogtag(){
            $sql = "SELECT * FROM dogtag INNER JOIN membro ON dogtag.idMembro = membro.idMembro ORDER BY totalDgt DESC";
            $conexao = Conexao::LigarConexao();
            $conexao->exec("SET NAMES utf8");

            $resultado = $conexao->query($sql);
            $lista = $resultado->fetchAll();
            return $lista;
        }
        //lista membro
        public function ListarMembro(){
            $sql = "SELECT * FROM membro WHERE statusMembro = 'ativo'";
            $conexao = Conexao::LigarConexao();
            $conexao->exec("SET NAMES utf8");

            $resultado = $conexao->query($sql);
            $lista = $resultado->fetchAll();
            return $lista;
        }
    }