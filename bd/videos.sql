CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `nombreVideo` varchar(40) NOT NULL,
  `urlVideo` varchar(255) NOT NULL,
  `comentario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `videos` (`id`, `nombreVideo`, `urlVideo`, `comentario`) VALUES
(75, 'Aprende los instrumentos musicales', '<iframe width=\"250\" height=\"170\" src=\"https://www.youtube.com/embed/0cXfbb39VQ4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Instrumentos Musicales'),
(76, 'Los Instrumentos Musicales Clásicos', '<iframe width=\"250\" height=\"170\" src=\"https://www.youtube.com/embed/to73mH1MTwc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Instrumentos Musicales'),
(78, 'Aprende los instrumentos musicales con H', '<iframe width=\"250\" height=\"170\" src=\"https://www.youtube.com/embed/EPAA-tTJoS0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Instrumentos Musicales'),
(79, 'Los Instrumentos Musicales Clásicos', '<iframe width=\"250\" height=\"170\" src=\"https://www.youtube.com/embed/gOwDwjR7miI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Instrumentos Musicales'),
(81, 'Aprende los instrumentos musicales con H', '<iframe width=\"250\" height=\"170\" src=\"https://www.youtube.com/embed/Y8o9BqCwFaM\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Los Instrumentos Musicales Clásicos'),
(82, 'Los instrumentos y sus familias', '<iframe width=\"250\" height=\"170\" src=\"https://www.youtube.com/embed/IeqnskE-dpg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Instrumentos Musicales'),
(83, 'LOS NÚMEROS del 1 al 10 - Canciones de l', '<iframe width=\"250\" height=\"170\" src=\"https://www.youtube.com/embed/JziMDyQd1Ds\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Aprende los números'),
(84, 'Aprende a contar los números del 1 al 10', '<iframe width=\"250\" height=\"170\" src=\"https://www.youtube.com/embed/WhXZaxeZ5sg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Aprende los números'),
(85, 'Los Números del 1 al 10 (Learn Numbers 1', '<iframe width=\"250\" height=\"170\" src=\"https://www.youtube.com/embed/_A0_PQqmQ7Y\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Aprende los números'),
(86, 'Números | Aprender a Contar del 1 al 10', '<iframe width=\"250\" height=\"170\" src=\"https://www.youtube.com/embed/9BX6c0vhUSE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Aprende los números'),
(87, 'Cantando los Números - Canciones y Clási', '<iframe width=\"250\" height=\"170\" src=\"https://www.youtube.com/embed/gf3RDfQ8tJw\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Aprende los números'),
(88, 'Cantando los Números - Canciones y Clási', '<iframe width=\"250\" height=\"170\" src=\"https://www.youtube.com/embed/pSqnl2eSu9Y\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Aprende los números'),
(89, 'Ronda De Las Vocales, Canción Infantil', '<iframe width=\"250\" height=\"170\" src=\"https://www.youtube.com/embed/CqTXFbnG0ag\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Aprende las vocales'),
(90, 'La Canción de las Vocales | A E I O U | ', '<iframe width=\"250\" height=\"170\" src=\"https://www.youtube.com/embed/DDg0cHSR1wY\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Aprende las vocales'),
(91, 'Las vocales para niños - Aprender las vo', '<iframe width=\"250\" height=\"170\" src=\"https://www.youtube.com/embed/hUmcjGvWaGc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Aprende las vocales'),
(92, 'Canta a e i o u | Aprende las vocales co', '<iframe width=\"250\" height=\"170\" src=\"https://www.youtube.com/embed/qM26UWj6cd8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Aprende las vocales'),
(93, 'Plim Plim - Aprendemos las Vocales - Vid', '<iframe width=\"250\" height=\"170\" src=\"https://www.youtube.com/embed/Rj4RwPRCQVo\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Aprende las vocales'),
(94, 'SOMOS LAS VOCALES - MI PERRO CHOCOLO APR', '<iframe width=\"250\" height=\"170\" src=\"https://www.youtube.com/embed/etLrs8qrNNo\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Aprende las vocales');


--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;
