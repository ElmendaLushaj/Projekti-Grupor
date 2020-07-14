USE [master]
GO
/****** Object:  Database [pocketMarket]    *****/
CREATE DATABASE [pocketMarket]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'pocketMarket', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL11.MSSQLSERVER\MSSQL\DATA\pocketMarket.mdf' , SIZE = 4160KB , MAXSIZE = UNLIMITED, FILEGROWTH = 1024KB )
 LOG ON 
( NAME = N'pocketMarket_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL11.MSSQLSERVER\MSSQL\DATA\pocketMarket_log.ldf' , SIZE = 1040KB , MAXSIZE = 2048GB , FILEGROWTH = 10%)
GO
ALTER DATABASE [pocketMarket] SET COMPATIBILITY_LEVEL = 110
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [pocketMarket].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [pocketMarket] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [pocketMarket] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [pocketMarket] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [pocketMarket] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [pocketMarket] SET ARITHABORT OFF 
GO
ALTER DATABASE [pocketMarket] SET AUTO_CLOSE ON 
GO
ALTER DATABASE [pocketMarket] SET AUTO_CREATE_STATISTICS ON 
GO
ALTER DATABASE [pocketMarket] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [pocketMarket] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [pocketMarket] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [pocketMarket] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [pocketMarket] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [pocketMarket] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [pocketMarket] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [pocketMarket] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [pocketMarket] SET  ENABLE_BROKER 
GO
ALTER DATABASE [pocketMarket] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [pocketMarket] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [pocketMarket] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [pocketMarket] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [pocketMarket] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [pocketMarket] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [pocketMarket] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [pocketMarket] SET RECOVERY SIMPLE 
GO
ALTER DATABASE [pocketMarket] SET  MULTI_USER 
GO
ALTER DATABASE [pocketMarket] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [pocketMarket] SET DB_CHAINING OFF 
GO
ALTER DATABASE [pocketMarket] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [pocketMarket] SET TARGET_RECOVERY_TIME = 0 SECONDS 
GO
USE [pocketMarket]
GO


GO
/****** Object:  Table [dbo].[User]    Script Date: 23/06/2020 15:36:30 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO



/****** Object:  Table [dbo].[Product]    Script Date: 23/06/2020 15:36:30 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Product](
	[ProductID] [int] IDENTITY (1,1)NOT NULL,
	[ProductName] [varchar](255) NOT NULL,
	[ProductCode] [int] NOT NULL,
	[Producer][varchar](255)NOT NULL,
	[Category] [varchar](255) NOT NULL,
	[ProductPicPath] [varchar](255) NOT NULL,
	
PRIMARY KEY CLUSTERED 
(
	[ProductID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Market]    Script Date: 03/07/2020 13:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Market](
	[MarketID] [int]IDENTITY (1,1) NOT NULL,
	[MarketName] [varchar](255) NOT NULL,
	[Address] [varchar](255) NOT NULL,
	[Phone] [varchar](255) ,
	
PRIMARY KEY CLUSTERED 
(
	[MarketID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
SET ANSI_PADDING OFF
GO
CREATE TABLE [dbo].[SliderProduct](
	[SliderProductID] [int]IDENTITY (1,1) NOT NULL,

[SliderProductPicPath] [varchar](255) NOT NULL,
[ProductID][int] NOT NULL,
	PRIMARY KEY CLUSTERED 
(
	[SliderProductID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
SET ANSI_PADDING OFF
GO
CREATE TABLE [dbo].[SliderMarket](
	[SliderMarketID] [int]IDENTITY (1,1) NOT NULL,
	
[SliderMarketPicPath] [varchar](255) NOT NULL,
[MarketID][int] NOT NULL,

PRIMARY KEY CLUSTERED 
(
	[SliderMarketID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

/*** Tablea per shopping list ***/

SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[List](
	[ListID] [int] IDENTITY (1,1)NOT NULL,
	[ProductPath] [varchar](255) NOT NULL,
	[ProductName] [int] NOT NULL,
	[ProductPrice][float](53)NOT NULL,
	[Quantity] [int] NOT NULL,
	[Total] [int] NOT NULL,
	[ProductID][int] NOT NULL,
	
PRIMARY KEY CLUSTERED 
(
	[ListID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO



USE [master]
GO
ALTER DATABASE [pocketMarket] SET  READ_WRITE 
GO

USE[pocketMarket]
GO

ALTER TABLE [dbo].[SliderMarket]  WITH CHECK ADD FOREIGN KEY([MarketID])
REFERENCES [dbo].[Market] ([MarketID])
GO
ALTER TABLE [dbo].[SliderProduct]  WITH CHECK ADD FOREIGN KEY([ProductID])
REFERENCES [dbo].[Product] ([ProductID])
GO




SET IDENTITY_INSERT [dbo].[User] OFF

SET IDENTITY_INSERT [dbo].[Market] ON 

INSERT [dbo].[Market] ([MarketID], [MarketName], [Address], [Phone]) VALUES (1, N'Albi', N'Prishtine', 38344987987)
INSERT [dbo].[Market] ([MarketID], [MarketName], [Address], [Phone]) VALUES (2, N'Viva Fresh Store', N'Prishtine', 38344785207)
INSERT [dbo].[Market] ([MarketID], [MarketName], [Address], [Phone]) VALUES (3, N'Aldi', N'Germany', 42344987987)
INSERT [dbo].[Market] ([MarketID], [MarketName], [Address], [Phone]) VALUES (4, N'Edeka', N'Germany', 42348752337)
INSERT [dbo].[Market] ([MarketID], [MarketName], [Address], [Phone]) VALUES (5, N'Lidl', N'Germany', 4237423354)
INSERT [dbo].[Market] ([MarketID], [MarketName], [Address], [Phone]) VALUES (6, N'Super Viva', N'Prishtine', 3834478927)


SET IDENTITY_INSERT [dbo].[Market] OFF
use[pocketMarket]


SET IDENTITY_INSERT [dbo].[Product] ON 

INSERT [dbo].[Product] ([ProductID], [ProductName], [ProductCode],[Producer], [Category],[ProductPicPath]) VALUES (1, N'Abi Jogurt',  530517,N'Abi',N'Dairy',N'jogurt.jpg')
INSERT [dbo].[Product] ([ProductID], [ProductName], [ProductCode],[Producer], [Category],[ProductPicPath]) VALUES (2, N'Buena Vita', 390465,N'Liri',N'Sweets',N'keksaa.jpg')
INSERT [dbo].[Product] ([ProductID], [ProductName], [ProductCode],[Producer], [Category],[ProductPicPath]) VALUES (3, N'Sempre Baby-Biscuits', 390574,N'Liri',N'Sweets',N'sempre.jpg')
INSERT [dbo].[Product] ([ProductID], [ProductName], [ProductCode],[Producer], [Category],[ProductPicPath]) VALUES (4, N'Uje Rugove', 907987,N'Rugove',N'Drinks',N'uje.jpg')
INSERT [dbo].[Product] ([ProductID], [ProductName], [ProductCode],[Producer], [Category],[ProductPicPath]) VALUES (5, N'Uje Kllokoti', 390544,N'Banja e Kllokotit',N'Drinks',N'ujTh.jpg')
INSERT [dbo].[Product] ([ProductID], [ProductName], [ProductCode],[Producer], [Category],[ProductPicPath]) VALUES (6, N'Vita Slim Fit', 390458,N'Devolli Corporation',N'Dairy',N'vita.jpg')
SET IDENTITY_INSERT [dbo].[Product] OFF

SET IDENTITY_INSERT [dbo].[SliderProduct] ON 

INSERT [dbo].[SliderProduct] ([SliderProductID], [SliderProductPicPath], [ProductID]) VALUES (1, N'C:\Users\DELL\OneDrive\Desktop\WEB\Projekti-Grupor\ujTh.jpg', 1)
INSERT [dbo].[SliderProduct] ([SliderProductID], [SliderProductPicPath], [ProductID]) VALUES (2, N'C:\Users\DELL\OneDrive\Desktop\WEB\Projekti-Grupor\jogurt.jpg', 2)
INSERT [dbo].[SliderProduct] ([SliderProductID], [SliderProductPicPath], [ProductID]) VALUES (3, N'C:\Users\DELL\OneDrive\Desktop\WEB\Projekti-Grupor\keksaa.jpg', 3)


SET IDENTITY_INSERT [dbo].[SliderProduct] OFF

SET IDENTITY_INSERT [dbo].[SliderMarket] ON 

INSERT [dbo].[SliderMarket] ([SliderMarketID], [SliderMarketPicPath], [MarketID]) VALUES (1, N'C:\Users\DELL\OneDrive\Desktop\WEB\Projekti-Grupor\aldi.jpg', 1)
INSERT [dbo].[SliderMarket] ([SliderMarketID], [SliderMarketPicPath], [MarketID]) VALUES (2, N'C:\Users\DELL\OneDrive\Desktop\WEB\Projekti-Grupor\edeka.jpg', 2)
INSERT [dbo].[SliderMarket] ([SliderMarketID], [SliderMarketPicPath], [MarketID]) VALUES (3, N'C:\Users\DELL\OneDrive\Desktop\WEB\Projekti-Grupor\lidl.jpg', 3)


SET IDENTITY_INSERT [dbo].[SliderProduct] OFF




ALTER TABLE [dbo].[List]  WITH CHECK ADD FOREIGN KEY([ProductID])
REFERENCES [dbo].[Product] ([ProductID])
GO

/*** Tabela per Lidhjen shume me shume mes marketeve dhe produkteve ***/

SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[MarketProduct](
	[ID] [int] IDENTITY (1,1)NOT NULL,
	
	[MarketID] [int] NOT NULL,
	[ProductID][int] NOT NULL,
	
PRIMARY KEY CLUSTERED 
(
	[ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO

ALTER TABLE [dbo].[MarketProduct]  WITH CHECK ADD FOREIGN KEY([MarketID])
REFERENCES [dbo].[Market] ([MarketID])
GO
ALTER TABLE [dbo].[MarketProduct]  WITH CHECK ADD FOREIGN KEY([ProductID])
REFERENCES [dbo].[Product] ([ProductID])
GO

SET IDENTITY_INSERT [dbo].[MarketProduct] ON 
INSERT [dbo].[MarketProduct] ([ID], [MarketID], [ProductID]) VALUES (1,2 ,3 )
INSERT [dbo].[MarketProduct] ([ID], [MarketID], [ProductID]) VALUES (2, 4, 4)
INSERT [dbo].[MarketProduct] ([ID], [MarketID], [ProductID]) VALUES (3, 6, 5)
SET IDENTITY_INSERT [dbo].[MarketProduct] OFF

DROP TABLE [User];

SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[User](
	[UserID] [int] IDENTITY (1,1) NOT NULL,
	[FirstName] [varchar](255) NOT NULL,
	[Email] [varchar](255) NOT NULL,
	[Passworddd] [varchar](255) NOT NULL,
	[RoleId] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[UserID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO


SET IDENTITY_INSERT [dbo].[User] ON 

INSERT [dbo].[User] ([UserID], [FirstName], [Email], [Passworddd] ,[RoleId]) VALUES (1, N'Elmenda', N'el@gmail.com', N'000000' , 2)
INSERT [dbo].[User] ([UserID], [FirstName], [Email], [Passworddd], [RoleId]) VALUES (2, N'Melina', N'ml@gmail.com', N'111111' , 2)
INSERT [dbo].[User] ([UserID], [FirstName], [Email], [Passworddd], [RoleId]) VALUES (3, N'Kujtes', N'kl@gmail.com', N'222222', 2)
INSERT [dbo].[User] ([UserID], [FirstName], [Email], [Passworddd], [RoleId]) VALUES (4, N'Admin', N'admin@gmail.com', N'123456', 1)

SET IDENTITY_INSERT [dbo].[User] OFF

Use [pocketMarket]

DROP TABLE [User]


USE [pocketMarket]

CREATE TABLE [dbo].[AboutUs](
	[AboutUsID] [int] IDENTITY (1,1) NOT NULL,
	[Comment] [varchar](255) NOT NULL,

PRIMARY KEY CLUSTERED 
(
	[AboutUsID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO