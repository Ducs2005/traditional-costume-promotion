CREATE DATABASE finalweb_2024
CREATE TABLE `users` (
`id` int(11) NOT NULL,
`name` varchar(200) NOT NULL,
`email` varchar(200) NOT NULL,
`password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;