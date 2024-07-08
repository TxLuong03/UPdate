SET SQL_MODE= "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time="+7";

CREATE TABLE `account` (
  `id` int(5)  NOT NULL;
  `name` varchar(50)  DEFAULT NULL;
  `pass` varchar(20)  DEFAULT NULL;
  `email` varchar(100) DEFAULT NULL;
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
  ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);
  ALTER TABLE `account`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;


INSERT INTO `account` (`id`, `username`, `password`, `email`,) VALUES
(12, 'Luong', '123', 'a@gmail.com', NULL, NULL);

CREATE TABLE `bannertop` (
  `id` int(5) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `button` varchar(30) DEFAULT NULL,
  `img` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
  ALTER TABLE `bannertop`
  ADD PRIMARY KEY (`id`);
  ALTER TABLE `bannertop`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

INSERT INTO `bannertop` (`id`, `title`, `button`, `img`) VALUES
(1,' Try to become better more than yesterday', 'Read more', 'https://s3-alpha-sig.figma.com/img/ca9d/ce3c/be0d9454b3adac819fb998692e417a4a?Expires=1721001600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=pTYQWB~da9HN7Eat0EStNBCTadtztJZ2rTpr9ynLbgBXgA8qLGZEX6OPOm~Bm6wWY52RgyNOawTpeK78f3qXw9eIccsk0dAF7fFQ46-Scsa7FBy1Qt2MlHb7rSWqKZ7PkEyrtx-cSiyYi-hyiIMiDGr~KkUxKM7gGLQ7Gh~jZNLrufAQ1pssSoUL6JI9fvajEQDhV5Ic15C3YWhKXRcUuHtNfZrwkQEQM5ttEnh~uK3IAxT~xLdcxklhzZ1HIb-GrpHaM7dx-RaHUa-sNaBwKbIwPa7h7jJmvqcsgtPhyUBVVCfb6xT-gZeZo5OHKgPiaohID6UPepzWGoZZs6HxiQ__');


CREATE TABLE `bannermid` (
  `id` int(5) NOT NULL,
  `img` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
  ALTER TABLE `bannermid`
  ADD PRIMARY KEY (`id`);
  ALTER TABLE `bannermid`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

INSERT INTO `bannermid` (`id`, `img`) VALUES
(2, 'https://s3-alpha-sig.figma.com/img/ca9d/ce3c/be0d9454b3adac819fb998692e417a4a?Expires=1721001600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=pTYQWB~da9HN7Eat0EStNBCTadtztJZ2rTpr9ynLbgBXgA8qLGZEX6OPOm~Bm6wWY52RgyNOawTpeK78f3qXw9eIccsk0dAF7fFQ46-Scsa7FBy1Qt2MlHb7rSWqKZ7PkEyrtx-cSiyYi-hyiIMiDGr~KkUxKM7gGLQ7Gh~jZNLrufAQ1pssSoUL6JI9fvajEQDhV5Ic15C3YWhKXRcUuHtNfZrwkQEQM5ttEnh~uK3IAxT~xLdcxklhzZ1HIb-GrpHaM7dx-RaHUa-sNaBwKbIwPa7h7jJmvqcsgtPhyUBVVCfb6xT-gZeZo5OHKgPiaohID6UPepzWGoZZs6HxiQ__');


CREATE TABLE `bannerbottom` (
  `id` int(5) NOT NULL,
  `img` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
  ALTER TABLE `bannerbottom`
  ADD PRIMARY KEY (`id`);
  ALTER TABLE `bannerbottom`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

INSERT INTO `bannerbottom` (`id`, `img`) VALUES
(3, 'https://s3-alpha-sig.figma.com/img/ca9d/ce3c/be0d9454b3adac819fb998692e417a4a?Expires=1721001600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=pTYQWB~da9HN7Eat0EStNBCTadtztJZ2rTpr9ynLbgBXgA8qLGZEX6OPOm~Bm6wWY52RgyNOawTpeK78f3qXw9eIccsk0dAF7fFQ46-Scsa7FBy1Qt2MlHb7rSWqKZ7PkEyrtx-cSiyYi-hyiIMiDGr~KkUxKM7gGLQ7Gh~jZNLrufAQ1pssSoUL6JI9fvajEQDhV5Ic15C3YWhKXRcUuHtNfZrwkQEQM5ttEnh~uK3IAxT~xLdcxklhzZ1HIb-GrpHaM7dx-RaHUa-sNaBwKbIwPa7h7jJmvqcsgtPhyUBVVCfb6xT-gZeZo5OHKgPiaohID6UPepzWGoZZs6HxiQ__');


CREATE TABLE `bannerdream` (
  `id` int(5) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `des` varchar(150) DEFAULT NULL,
  `img` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
  ALTER TABLE `bannerdream`
  ADD PRIMARY KEY (`id`);
  ALTER TABLE `bannerdream`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
  COMMIT;

  INSERT INTO `bannerdream` (`id`, `title`, `des`, `img`) VALUES
(4, 'tract', 'Dream', 'https://s3-alpha-sig.figma.com/img/d240/0080/5e2f829a62598286fe107ac1d4f36c0c?Expires=1721001600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Ij8g2NWoAuhJ-ZePwHtE0qYeVQJl2mQuGaHdTKLerM-WU~7va~2aeAneBROmy2~BsObvHJs2MkxOjr5n1ey7TTvb7wnSlKq2goQ5iaeLW0wp38tHHWpsMK8OPLzCCfQ3OxUbNpXyvTWxPDbrIUIR91S3TD3Sv1Jl4eKNv1JbA5krXR1r78i1jd1ufoWlzrD2Q3FAvqUi9k1NGPIPCQNL80tbSZqwHB0te6gS7hrQ87h2-v6QFyT5UoItAB2WfHbL03lINIx4jXP5XQ9yzOzM~2PMa6xlUoesui-HkDcKfC-D89izFsNyH3hryd4XLxTso-XnmVUhg0kYUxJf4KMgig__'),

CREATE TABLE `bannerslidemid1` (
  `id` int(5) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `button` varchar(150) DEFAULT NULL,
  `img` varchar(1000) DEFAULT NULL,
  `des` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
  ALTER TABLE `bannerslidemid1`
  ADD PRIMARY KEY (`id`);
  ALTER TABLE `bannerslidemid1`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

  INSERT INTO `bannerslidemid1` (`id`, `title`, `button`, `img`, `des`) VALUES
(5, 'Begin your experience', 'Read more', 'https://s3-alpha-sig.figma.com/img/d240/0080/5e2f829a62598286fe107ac1d4f36c0c?Expires=1721001600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Ij8g2NWoAuhJ-ZePwHtE0qYeVQJl2mQuGaHdTKLerM-WU~7va~2aeAneBROmy2~BsObvHJs2MkxOjr5n1ey7TTvb7wnSlKq2goQ5iaeLW0wp38tHHWpsMK8OPLzCCfQ3OxUbNpXyvTWxPDbrIUIR91S3TD3Sv1Jl4eKNv1JbA5krXR1r78i1jd1ufoWlzrD2Q3FAvqUi9k1NGPIPCQNL80tbSZqwHB0te6gS7hrQ87h2-v6QFyT5UoItAB2WfHbL03lINIx4jXP5XQ9yzOzM~2PMa6xlUoesui-HkDcKfC-D89izFsNyH3hryd4XLxTso-XnmVUhg0kYUxJf4KMgig__'),


  CREATE TABLE `bannerslidemid2` (
  `id` int(5) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `button` varchar(100) DEFAULT NULL,
  `img` varchar(1000) DEFAULT NULL,
  `des` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
  ALTER TABLE `bannerslidemid2`
  ADD PRIMARY KEY (`id`);
  ALTER TABLE `bannerslidemid2`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

  INSERT INTO `bannerslidemid2` (`id`, `title`, `button`, `img`, `des`) VALUES
(6, NULL, 'Read ++',  'https://s3-alpha-sig.figma.com/img/d240/0080/5e2f829a62598286fe107ac1d4f36c0c?Expires=1721001600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Ij8g2NWoAuhJ-ZePwHtE0qYeVQJl2mQuGaHdTKLerM-WU~7va~2aeAneBROmy2~BsObvHJs2MkxOjr5n1ey7TTvb7wnSlKq2goQ5iaeLW0wp38tHHWpsMK8OPLzCCfQ3OxUbNpXyvTWxPDbrIUIR91S3TD3Sv1Jl4eKNv1JbA5krXR1r78i1jd1ufoWlzrD2Q3FAvqUi9k1NGPIPCQNL80tbSZqwHB0te6gS7hrQ87h2-v6QFyT5UoItAB2WfHbL03lINIx4jXP5XQ9yzOzM~2PMa6xlUoesui-HkDcKfC-D89izFsNyH3hryd4XLxTso-XnmVUhg0kYUxJf4KMgig__', '\no'),


  CREATE TABLE `bannerslidemid3` (
  `id` int(5) NOT NULL,
  `img` varchar(1000) DEFAULT NULL,
  `button` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
  ALTER TABLE `bannerslidemid3`
  ADD PRIMARY KEY (`id`);
  ALTER TABLE `bannerslidemid3`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

INSERT INTO `bannerslidemid3` (`id`, `img`,`button`, `title`, `des`) VALUES
(7,NULL,'Read',  'https://s3-alpha-sig.figma.com/img/d240/0080/5e2f829a62598286fe107ac1d4f36c0c?Expires=1721001600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Ij8g2NWoAuhJ-ZePwHtE0qYeVQJl2mQuGaHdTKLerM-WU~7va~2aeAneBROmy2~BsObvHJs2MkxOjr5n1ey7TTvb7wnSlKq2goQ5iaeLW0wp38tHHWpsMK8OPLzCCfQ3OxUbNpXyvTWxPDbrIUIR91S3TD3Sv1Jl4eKNv1JbA5krXR1r78i1jd1ufoWlzrD2Q3FAvqUi9k1NGPIPCQNL80tbSZqwHB0te6gS7hrQ87h2-v6QFyT5UoItAB2WfHbL03lINIx4jXP5XQ9yzOzM~2PMa6xlUoesui-HkDcKfC-D89izFsNyH3hryd4XLxTso-XnmVUhg0kYUxJf4KMgig__', '\no' ),

 CREATE TABLE `textmid` (
  `id` int(5) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `des` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
  ALTER TABLE `textmid`
  ADD PRIMARY KEY (`id`);
  ALTER TABLE `textmid`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

  INSERT INTO `bannerslidemid2` (`id`, `title`, `des`) VALUES
(8,'Porsche driving at it’s best – on the racetrack','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');  




