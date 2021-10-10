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
    let indiceX = 0;
    let indiceY = 0;
    for (let x = posX - 1; x < posX + 2; x++) {
      for (let y = posY - 1; y < posY + 2; y++) {
        if (x < 0) {
          indiceX = this.tablero.length - 1;
        } else if (x === this.tablero.length) {
          indiceX = 0;
        } else {
          indiceX = x;
        }

        if (y < 0) {
          indiceY = this.tablero[0].length - 1;
        } else if (y === this.tablero[0].length) {
          indiceY = 0;
        } else {
          indiceY = y;
        }
        if (this.tablero[indiceX][indiceY] === 1) {
          numVecinos = numVecinos + 1;
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
      return true;
    }
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
}

function verDemo() {
  const loop = document.getElementsByClassName("gameoflife__loop");
  loop[0].style.display = "none";
  const pararLoop = document.getElementsByClassName("gameoflife__pararloop");
  pararLoop[0].style.display = "flex";

  const numero_filas = Number(
    document.getElementsByClassName("gameoflife__numero_filas")[0].value
  );

  const numero_columnas = Number(
    document.getElementsByClassName("gameoflife__numero_columnas")[0].value
  );

  const partidaGameOfLife = new gameOfLife(numero_filas, numero_columnas);

  for (let x = 0; x < numero_filas; x++) {
    for (let y = 0; y < numero_columnas; y++) {
      const int1 = `${x}-${y}-1`;
      if (document.getElementById(int1) !== null) {
        partidaGameOfLife.añadirVida(x, y);
      }
    }
  }
  const tirada = new gameOfLife();

  tirada.copiarArray(partidaGameOfLife.tablero);

  for (let x = 0; x < tirada.tablero.length; x++) {
    for (let y = 0; y < tirada.tablero[x].length; y++) {
      if (tirada.rule1(x, y)) {
        partidaGameOfLife.tablero[x][y] = 0;
        const crearId = `${x}-${y}-1`;
        const ficha = document.getElementById(crearId);
        ficha.className = "gameoflife__dead";
        ficha.id = `${x}-${y}-0`;
      }
      if (tirada.rule2(x, y)) {
        partidaGameOfLife.tablero[x][y] = 1;
        const int1 = `${x}-${y}-1`;
        const ficha = document.getElementById(int1);
        ficha.className = "gameoflife__life";
        ficha.id = `${x}-${y}-1`;
      }
      if (tirada.rule3(x, y)) {
        partidaGameOfLife.tablero[x][y] = 0;
        const int1 = `${x}-${y}-1`;
        const ficha = document.getElementById(int1);
        ficha.className = "gameoflife__dead";
        ficha.id = `${x}-${y}-0`;
      }
      if (tirada.rule4(x, y)) {
        partidaGameOfLife.tablero[x][y] = 1;
        const int1 = `${x}-${y}-0`;
        const ficha = document.getElementById(int1);
        ficha.className = "gameoflife__life";
        ficha.id = `${x}-${y}-1`;
      }
    }
  }
}

function Empezar() {
  const crear_tablero = document.getElementsByClassName("gameoflife__Crear");
  crear_tablero[0].style.display = "none";
  const reload = document.getElementsByClassName("gameoflife__reload");
  reload[0].style.display = "flex";

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
      divY.id += `${y}-${x}-0`;
      divY.onclick = añadirVida;
      jugadorY[x].appendChild(divY);
    }
  }
}

function añadirVida() {
  const auxId = this.id.split("-");
  if (auxId[2] === "1") {
    this.className = "gameoflife__dead";
    this.id = `${auxId[0]}-${auxId[1]}-0`;
  } else {
    this.className = "gameoflife__life";
    this.id = `${auxId[0]}-${auxId[1]}-1`;
  }
}

//const loop_program = 0;

function loop() {
  const demo = document.getElementsByClassName("gameoflife__demo");
  demo[0].style.backgroundColor = "green";
  loop_program = setInterval(verDemo, 500);
}

function pararLoop() {
  const loop = document.getElementsByClassName("gameoflife__loop");
  loop[0].style.display = "flex";
  const pararLoop = document.getElementsByClassName("gameoflife__pararloop");
  pararLoop[0].style.display = "none";

  const demo = document.getElementsByClassName("gameoflife__demo");
  demo[0].style.backgroundColor = "red";
  clearTimeout(loop_program);
}

module.exports = { gameOfLife };
