/*
    Avvalo khiva deb nomlangan phpMyadminda database yaratamiz keyin shu sql kodni kiritamiz.
    keyin yana bitta table yaratamiz unga table2.sql ni kiritamiz
*/
CREATE TABLE `hotelbron` (
  `id` int(255) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `ismi` varchar(255) NOT NULL,
  `familya` varchar(255) NOT NULL,
  `t_raqami` bigint(255) NOT NULL,
  `e_pochta` varchar(255) NOT NULL,
  `kelish_vaqti` date NOT NULL,
  `ketish_vaqti` date NOT NULL,
  `mehmonlar_soni` int(255) NOT NULL,
  `xonalar_soni` int(255) NOT NULL
)