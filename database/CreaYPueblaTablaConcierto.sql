USE Conciertos;
GO

CREATE TABLE Actuacion
(  idActuacion INT IDENTITY NOT NULL,
   fecha DATE NOT NULL,
   hora TIME NOT NULL,
   grupo NVARCHAR(50) NOT NULL,
   precio MONEY NOT NULL,
   entradasDisponibles INT NOT NULL,
   CONSTRAINT PkActuacion
      PRIMARY KEY(idActuacion),
);

CREATE TABLE Reserva
(  idReserva INT IDENTITY NOT NULL,
   dni VARCHAR(9) NOT NULL,
   fecha DATE NOT NULL,
   hora TIME NOT NULL,
   idActuacion INT NOT NULL,
   localidades INT NOT NULL,
   pagado BIT NOT NULL,
   CONSTRAINT PkReserva
      PRIMARY KEY(idReserva),
   CONSTRAINT FkActuacionNReserva
      FOREIGN KEY (idActuacion)
      REFERENCES Actuacion(idActuacion),
);
GO

CREATE TRIGGER trActEntrDispon
ON Reserva
AFTER INSERT
AS
BEGIN
 DECLARE @quedan INT;

   SELECT @quedan = entradasDisponibles
     FROM actuacion a
	  INNER JOIN inserted i ON a.idActuacion = i.idActuacion;
   IF @quedan >= (SELECT localidades FROM inserted)
   BEGIN
      UPDATE Actuacion
         SET entradasDisponibles = entradasDisponibles -localidades
        FROM inserted i
       WHERE i.idActuacion = Actuacion.idActuacion;
   END
   ELSE
   BEGIN
      RAISERROR('No hay entradas suficientes', 16, 1);
      ROLLBACK TRAN;
   END;
END;
GO

INSERT INTO Actuacion (fecha, hora, grupo, precio, entradasDisponibles)
   VALUES ('2024-07-01', '20:30:00', N'Los Puris', 65.95, 200),
          ('2024-07-06', '22:00:00', N'The Bats', 99.75, 200),
          ('2024-07-15', '16:30:00', N'Agosto Catedrales', 250, 100),
          ('2024-07-21', '18:00:00', N'Amancio Guchi', 80.50, 150),
          ('2024-07-21', '22:00:00', N'Amancio Guchi', 80.50, 125),
          ('2024-07-29', '22:30:00', N'Rolling Balls', 400, 250),
          ('2024-08-05', '19:45:00', N'Slow Hand', 348.65, 175);
GO