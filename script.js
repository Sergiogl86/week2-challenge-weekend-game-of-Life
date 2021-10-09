const { functionsIn } = require("lodash");

class gameOfLife {
  constructor(alto, ancho) {
    this.tablero = [];
    for (let i = 0; i < alto; i++) {
      this.tablero.push([]);
      for (let y = 0; y < ancho; y++) {
        this.tablero[i].push(0);
      }
    }
  }

  copiarArray(array) {
    this.tablero = [];
    for (let x = 0; x < array.length; x++) {
      this.tablero.push([]);
      for (let y = 0; y < array[x].length; y++) {
        this.tablero[x].push(array[x][y]);
      }
    }
  }

  añadirVida(posX, posY) {
    this.tablero[posX][posY] = 1;
  }

  comprobarVecinos(posX, posY) {
    let numVecinos = 0;
    let indiceX = posX - 1;
    let indiceXTop = 3;
    let indiceY = posY - 1;
    let indiceYTop = 3;
    if (indiceX < 0) {
      indiceX = indiceX + 1;
      indiceXTop = 2;
    } else if (indiceX + indiceXTop > this.tablero.length) {
      indiceXTop = 2;
    }
    if (indiceY < 0) {
      indiceY = indiceY + 1;
      indiceYTop = 2;
    } else if (indiceY + indiceYTop > this.tablero[0].length) {
      indiceYTop = 2;
    }
    for (let x = indiceX; x < indiceX + indiceXTop; x++) {
      for (let y = indiceY; y < indiceY + indiceYTop; y++) {
        if (0 < x < this.tablero.length && 0 < y < this.tablero[0].length) {
          if (this.tablero[x][y] === 1) {
            numVecinos = numVecinos + 1;
          }
        }
      }
    }
    return numVecinos - this.tablero[posX][posY];
  }

  rule1(posX, posY) {
    //Rule 1 - Any live cell with fewer than two live neighbours dies, as if by underpopulation.
    if (
      this.tablero[posX][posY] === 1 &&
      this.comprobarVecinos(posX, posY) < 2
    ) {
      console.log(this.comprobarVecinos(posX, posY));
      return true;
    }
    console.log(this.comprobarVecinos(posX, posY));
    return false;
  }

  rule2(posX, posY) {
    // Rule 2 - Any live cell with two or three live neighbours lives on to the next generation.
    if (
      this.tablero[posX][posY] === 1 &&
      this.comprobarVecinos(posX, posY) > 1 &&
      this.comprobarVecinos(posX, posY) < 4
    ) {
      return true;
    }
    return false;
  }

  rule3(posX, posY) {
    // Rule 3 - Any live cell with more than three live neighbours dies, as if by overpopulation.
    if (
      this.tablero[posX][posY] === 1 &&
      this.comprobarVecinos(posX, posY) > 3
    ) {
      return true;
    }
    return false;
  }

  rule4(posX, posY) {
    // Rule 4 - Any dead cell with exactly three live neighbours becomes a live cell, as if by reproduction.
    if (
      this.tablero[posX][posY] === 0 &&
      this.comprobarVecinos(posX, posY) === 3
    ) {
      return true;
    }
    return false;
  }

  jugarGameOfLife() {
    let alto = prompt("Dime el alto del tablero");
    let ancho = prompt("Dime el ancho del tablero");

    const partida = new gameOfLife(+ancho, +alto);

    console.table(partida.tablero);

    console.table("Creo el tablero!");

    let seguir;

    do {
      do {
        let coordenadaX = prompt("Dime coordenada x para introducir Vida");
        let coordenadaY = prompt("Dime coordenada y para introducir Vida");

        partida.añadirVida(+coordenadaX, +coordenadaY);

        console.table(partida.tablero);
        seguir = prompt("Quieres añadir mas vida, introduce mas");
      } while (seguir === "mas");

      const tirada = new gameOfLife();
      tirada.copiarArray(partida.tablero);
      console.table("Tablero despues de meter vida!");

      console.table(tirada.tablero);
      console.table("Creo tablero secundario!");

      for (let x = 0; x < tirada.tablero.length; x++) {
        for (let y = 0; y < tirada.tablero[x].length; y++) {
          if (tirada.rule1(x, y)) {
            partida.tablero[x][y] = 0;
          }
          if (tirada.rule2(x, y)) {
            partida.tablero[x][y] = 1;
          }
          if (tirada.rule3(x, y)) {
            partida.tablero[x][y] = 0;
          }
          if (tirada.rule4(x, y)) {
            partida.tablero[x][y] = 1;
          }
        }
      }

      console.table(tirada.tablero);
      console.table("Tablero que no ha de cambiar de tirada");

      console.table(partida.tablero);
      console.table("Tablero despues del turno!");

      seguir = prompt("Quieres seguir jugando, di que si");
    } while (seguir === "si");
  }
}

function Empezar() {
  const numero_filas = Number(
    document.getElementsByClassName("gameoflife__numero_filas")[0].value
  );

  const numero_columnas = Number(
    document.getElementsByClassName("gameoflife__numero_columnas")[0].value
  );
  for (let x = 0; x < numero_columnas; x++) {
    const jugadorX = document.getElementsByClassName("gameoflife__cuadricula");
    const divX = document.createElement("div");
    divX.className += "gameoflife__cell-x";
    jugadorX[0].appendChild(divX);
    for (let y = 0; y < numero_filas; y++) {
      const jugadorY = document.getElementsByClassName("gameoflife__cell-x");
      const divY = document.createElement("div");
      divY.className += "gameoflife__dead";
      divY.id += `${y}-${x}-d`;
      divY.onclick = añadirVida;
      jugadorY[x].appendChild(divY);
    }
  }
}

function añadirVida() {
  this.className = "gameoflife__life";
  const auxId = this.id.split("-");
  this.id = `${auxId[0]}-${auxId[1]}-l`;
}

const partidaGameOfLife = new gameOfLife(10, 10);

partidaGameOfLife.crearTablero(10, 10);

module.exports = { gameOfLife };

/*
function color2(numero_filas, numero_columnas) {
  for (let x = 0; x < numero_filas; x++) {
    jugadorX = document.getElementsByClassName("gameoflife__cuadricula");
    const divX = document.createElement("div");
    divX.className += "gameoflife__cell-x";
    jugadorX[0].appendChild(divX);
    for (let y = 0; y < numero_columnas; y++) {
      jugadorY = document.getElementsByClassName("gameoflife__cell-x");
      const divY = document.createElement("div");
      divY.className += "gameoflife__cell-y";

      jugadorY[x].appendChild(divY);
    }
  }
}*/
