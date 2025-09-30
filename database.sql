-- SQL file for PHP User Management System
-- Database: LoginReg
-- Table: table1

-- Create database
CREATE DATABASE IF NOT EXISTS `laptop_shop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `laptop_shop`;

-- Create table1 for user data
CREATE TABLE IF NOT EXISTS `Laptops` (
  `LaptopID` INT NOT NULL AUTO_INCREMENT,
  `Brand` VARCHAR(50) NOT NULL,
  `Model` VARCHAR(100) NOT NULL,
  `Processor` VARCHAR(100) NOT NULL,
  `RAM` INT NOT NULL,
  `Storage` VARCHAR(50) NOT NULL,
  `GraphicsCard` VARCHAR(100),
  `ScreenSize` DECIMAL(4,1),
  `OperatingSystem` VARCHAR(50),
  `Price` DECIMAL(10,2),
  `QuantityInStock` INT,
  `DateAdded` DATE,
  `WarrantyPeriod` VARCHAR(50),
  `Status` VARCHAR(20),
  PRIMARY KEY (`LaptopID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert sample data (optional)
INSERT INTO `Laptops` (`Brand`, `Model`, `Processor`, `RAM`, `Storage`, `GraphicsCard`, `ScreenSize`, `OperatingSystem`, `Price`, `QuantityInStock`, `DateAdded`, `WarrantyPeriod`, `Status`) VALUES
('Dell', 'XPS 13', 'Intel Core i7', 16, '512GB SSD', 'Intel Iris Xe', 13.3, 'Windows 10', 499.99, 10, '2025-01-15', '1 Year', 'Available'),
('HP', 'Spectre x360', 'Intel Core i5', 8, '256GB SSD', 'Windows 10', 299.99, 5, '2025-02-20', '1 Year', 'Available'),
('Apple', 'MacBook Pro', 'Apple M1', 16, '512GB SSD', 'Apple GPU', 13.3, 'macOS', 1999.99, 8, '2025-03-10', '1 Year', 'Available');