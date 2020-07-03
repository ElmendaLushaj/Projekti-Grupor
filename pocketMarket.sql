USE [master]
GO
/****** Object:  Database [pocketMarket]    *****/
CREATE DATABASE [pocketMarket]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'pocketMarket', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL11.MSSQLSERVER\MSSQL\DATA\pocketMarket.mdf' , SIZE = 4160KB , MAXSIZE = UNLIMITED, FILEGROWTH = 1024KB )
 LOG ON 
( NAME = N'pocketMarket_log', FILENAME = N'c:\Program Files\Microsoft SQL Server\MSSQL11.MSSQLSERVER\MSSQL\DATA\pocketMarket_log.ldf' , SIZE = 1040KB , MAXSIZE = 2048GB , FILEGROWTH = 10%)
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
/****** Object:  User [pocketMarket]    Script Date: 23/06/2020 15:36:30 
CREATE USER [arber] FOR LOGIN [arber] WITH DEFAULT_SCHEMA=[dbo]******/

GO
/****** Object:  Table [dbo].[User]    Script Date: 23/06/2020 15:36:30 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[User](
	[UserID] [int] IDENTITY (1,1) NOT NULL,
	[Name] [varchar](255) NOT NULL,
	[Email] [varchar](255) NOT NULL,
	[Password] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[UserID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
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
/****** Object:  Table [dbo].[Instructor]    Script Date: 23/06/2020 15:36:30 ******/
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
[Product][int] NOT NULL,
	CONSTRAINT FKProduct  FOREIGN KEY (Product)
    REFERENCES Product(ProductID),
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
[Market][int] NOT NULL, 
	CONSTRAINT FK_Market  FOREIGN KEY (Market)
    REFERENCES Market(MarketID),
PRIMARY KEY CLUSTERED 
(
	[SliderMarketID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
create table product_market_junction
(
  product_id int,
  market_id int,
  CONSTRAINT market_pk PRIMARY KEY (market_id, product_id),
  CONSTRAINT FK_market
      FOREIGN KEY (movie_id) REFERENCES Market (MarketID),
  CONSTRAINT FK_product
      FOREIGN KEY (product_id) REFERENCES Product(ProductID)
);

SET IDENTITY_INSERT [dbo].[User] ON 

INSERT [dbo].[User] ([UserID], [Username], [Email], [Password]) VALUES (1, N'elmenda', N'ellu@gmail.com', N'000000')

SET IDENTITY_INSERT [dbo].[User] OFF

SET IDENTITY_INSERT [dbo].[Market] ON 

INSERT [dbo].[Market] ([MarketID], [MarketName], [Address], [Phone]) VALUES (1, N'Albi', N'Prishtine', +38344987987)
INSERT [dbo].[Market] ([MarketID], [MarketName], [Address], [Phone]) VALUES (2, N'Viva Fresh Store', N'Prishtine', +38344785207)
INSERT [dbo].[Market] ([MarketID], [MarketName], [Address], [Phone]) VALUES (3, N'Aldi', N'Germany', +42344987987)
INSERT [dbo].[Market] ([MarketID], [MarketName], [Address], [Phone]) VALUES (4, N'Edeka', N'Germany', +42348752337)
INSERT [dbo].[Market] ([MarketID], [MarketName], [Address], [Phone]) VALUES (5, N'Lidl', N'Germany', +4237423354)
INSERT [dbo].[Market] ([MarketID], [MarketName], [Address], [Phone]) VALUES (6, N'Super Viva', N'Prishtine', +3834478927)


SET IDENTITY_INSERT [dbo].[Market] OFF

SET IDENTITY_INSERT [dbo].[Product] ON 

INSERT [dbo].[Product] ([ProductID], [ProductName], [ProductCode],[Producer], [Category],[ProductPicPath]) VALUES (1, N'Abi Jogurt',  3902223530517,N'Abi',N'Dairy',N'')
INSERT [dbo].[Product] ([ProductID], [ProductName], [ProductCode],[Producer], [Category],[ProductPicPath]) VALUES (2, N'Buena Vita', 390465546587,N'Liri',N'Sweets',N'')
INSERT [dbo].[Product] ([ProductID], [ProductName], [ProductCode],[Producer], [Category],[ProductPicPath]) VALUES (3, N'Sempre Baby-Biscuits', 390574547,N'Liri',N'Sweets',N'')
INSERT [dbo].[Product] ([ProductID], [ProductName], [ProductCode],[Producer], [Category],[ProductPicPath]) VALUES (4, N'Uje Rugove', 39079875858,N'Rugove',N'Drinks',N'')
INSERT [dbo].[Product] ([ProductID], [ProductName], [ProductCode],[Producer], [Category],[ProductPicPath]) VALUES (5, N'Uje Kllokoti', 3905445647,N'Banja e Kllokotit',N'Drinks',N'')
INSERT [dbo].[Product] ([ProductID], [ProductName], [ProductCode],[Producer], [Category],[ProductPicPath]) VALUES (6, N'Vita Slim Fit', 39045877977,N'Devolli Corporation',N'Dairy',N'')
SET IDENTITY_INSERT [dbo].[Product] OFF

SET IDENTITY_INSERT [dbo].[SliderProduct] ON 

INSERT [dbo].[SliderProduct] ([SliderProductID], [SliderPicPath], [Product]) VALUES (1, N'', 1)
INSERT [dbo].[SliderProduct] ([SliderProductID], [SliderPicPath], [Product]) VALUES (2, N'', 2)
INSERT [dbo].[SliderProduct] ([SliderProductID], [SliderPicPath], [Product]) VALUES (3, N'', 3)
INSERT [dbo].[SliderProduct] ([SliderProductID], [SliderPicPath], [Product]) VALUES (4, N'', 4)
INSERT [dbo].[SliderProduct] ([SliderProductID], [SliderPicPath], [Product]) VALUES (5, N'', 5)
INSERT [dbo].[SliderProduct] ([SliderProductID], [SliderPicPath], [Product]) VALUES (6, N'', 6)

SET IDENTITY_INSERT [dbo].[SliderProduct] OFF
SET IDENTITY_INSERT [dbo].[SliderProduct] ON 

INSERT [dbo].[MarketProduct] ([MarketProductID], [MarketPicPath], [Market]) VALUES (1, N'',3 )
INSERT [dbo].[MarketProduct] ([MarketProductID], [MarketPicPath], [Market]) VALUES (2, N'', 4)
INSERT [dbo].[MarketProduct] ([MarketProductID], [MarketPicPath], [Market]) VALUES (3, N'', 5)


SET IDENTITY_INSERT [dbo].[SliderProduct] OFF


USE [master]
GO
ALTER DATABASE [pocketMarket] SET  READ_WRITE 
GO