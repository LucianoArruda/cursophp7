CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_usuarios_insert`(
pdeslogin varchar(64),
pdessenha varchar(255)
)
BEGIN

	INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (pdeslogin, pdessenha);
    
    SELECT * FROM tb_usuarios WHERE idusuario = LAST_INSERT_ID();

END