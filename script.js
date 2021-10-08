class gameOfLife {
  constructor(alto, ancho) {
    debugger;
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
  comprobarVecinos(posX, posY) {
    let numVecinos = 0;
    let indiceX = posX - 1;
    let indiceY = posY - 1;
    for (x = indiceX; x < indiceX + 3; x++) {
      for (y = indiceY; y < indiceY + 3; y++) {
        if (this.tablero[x][y] == 1) {
          numVecinos = numVecinos + 1;
        }
      }
    }
    return numVecinos;
  }
}

const tablero = new gameOfLife(10, 10);

console.table(tablero.tablero);

const nuevaArray = [
  [0, 0, 0, 0, 0],
  [0, 0, 1, 0, 0],
  [0, 0, 1, 0, 0],
  [0, 0, 1, 0, 0],
  [0, 0, 0, 0, 0],
];

tablero.copiarArray(nuevaArray);

console.table(tablero.tablero);

tablero.comprobarVecinos(2, 2);

console.table(tablero.tablero);
