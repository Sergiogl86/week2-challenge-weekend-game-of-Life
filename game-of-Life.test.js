const { gameOfLife } = require("./script");

describe("Given copiarArray function", function () {
  describe("When we have a array = [[0,1,0],[1,0,1],[0,1,0]], and use copiarArray()", function () {
    test("Then should return [[0,1,0],[1,0,1],[0,1,0]]", function () {
      const imput = [
        [0, 1, 0],
        [1, 0, 1],
        [0, 1, 0],
      ];
      const expected = [
        [0, 1, 0],
        [1, 0, 1],
        [0, 1, 0],
      ];

      const testGameOfLife = new gameOfLife();
      testGameOfLife.copiarArray(imput);

      const result = testGameOfLife.tablero;

      expect(result).toEqual(expected);
    });
  });
});

describe("Given comprobarVecinos function", function () {
  describe("When we have a array = [[0,1,0],[1,0,1],[0,1,0]], comprobarVecinos in position x = 1 y = 1", function () {
    test("Then should return 4", function () {
      const imput = [
        [0, 1, 0],
        [1, 0, 1],
        [0, 1, 0],
      ];
      const expected = 4;

      const testGameOfLife = new gameOfLife();
      testGameOfLife.copiarArray(imput);

      const result = testGameOfLife.comprobarVecinos(1, 1);

      expect(result).toBe(expected);
    });
  });
  describe("When we have a array = [[0,1,0],[1,0,1],[0,1,0]], comprobarVecinos in position x = 0 y = 0", function () {
    test("Then should return 2", function () {
      const imput = [
        [0, 1, 0],
        [1, 0, 1],
        [0, 1, 0],
      ];
      const expected = 2;

      const testGameOfLife = new gameOfLife();
      testGameOfLife.copiarArray(imput);

      const result = testGameOfLife.comprobarVecinos(0, 0);

      expect(result).toBe(expected);
    });
  });
  describe("When we have a array = [[0,1,0],[1,0,1],[0,1,0]], comprobarVecinos in position x = 2 y = 2", function () {
    test("Then should return 2", function () {
      const imput = [
        [0, 1, 0],
        [1, 0, 1],
        [0, 1, 0],
      ];
      const expected = 2;

      const testGameOfLife = new gameOfLife();
      testGameOfLife.copiarArray(imput);

      const result = testGameOfLife.comprobarVecinos(2, 2);

      expect(result).toBe(expected);
    });
  });
});
