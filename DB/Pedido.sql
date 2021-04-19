CREATE TABLE pedido
(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
id_prisma int NOT NULL,
id_cliente INT NOT NULL, 
id_objeto INT NOT NULL, 
km VARCHAR(10) NULL, 
telefone varchar(20) null,
id_pagamento INT NOT NULL, 
id_vendedor INT NOT NULL, 
data_pedido DATE NOT NULL, 
data_previsao DATE NULL,
id_mecanico INT NOT NULL, 
defeito_apresentado varchar(100) NULL, 
pertence_deixado VARCHAR(150) NULL, 
total_pedido INT NOT NULL,
CONSTRAINT FK_id_cliente FOREIGN KEY (id_cliente) REFERENCES cliente (id),
CONSTRAINT FK_id_objeto FOREIGN KEY (id_objeto) REFERENCES objeto (id),
CONSTRAINT FK_id_pagamento FOREIGN KEY (id_pagamento) REFERENCES pagamento (id),
CONSTRAINT FK_id_vendedor FOREIGN KEY (id_vendedor) REFERENCES vendedor (id),
CONSTRAINT FK_id_mecanico FOREIGN KEY (id_mecanico) REFERENCES mecanico (id),
CONSTRAINT FK_id_prisma FOREIGN KEY (id_prisma) REFERENCES prisma (id)
)