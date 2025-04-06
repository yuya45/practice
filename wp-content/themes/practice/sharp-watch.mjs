import fs from 'fs';
import path from 'path';
import sharp from 'sharp';

let dirName = path.dirname(process.argv[2]).replace(/\\/g, '/');
let fileName = path.basename(process.argv[2]);

// compとwebpフォルダが入っていたら監視対象外（無限ループ回避）
if (dirName.includes('/comp') || dirName.includes('/webp')) {
  process.exit(0);
}

// 入力パスが 'assets/img' で始まるかを確認し、それに基づいて出力ディレクトリを設定
let outPutDir;
if (dirName.startsWith('assets/img')) {
  outPutDir = `${dirName}`;
} else {
  console.log('\u001b[1;31m 対応していないディレクトリです。');
  process.exit(1);
}

// 拡張子を取得
function getExtension(file) {
  let ext = path.extname(file || '').split('.');
  return ext[ext.length - 1];
}
const fileFormat = getExtension(fileName);

(() => {
  // 圧縮画像の保存ディレクトリ(comp)がなければ作成
  const compDir = `${outPutDir}/comp`;
  if (!fs.existsSync(compDir)) {
    fs.mkdirSync(compDir, { recursive: true });
  }

  // webp画像の保存ディレクトリ(webp)がなければ作成
  const webpDir = `${outPutDir}/webp`;
  if (!fs.existsSync(webpDir)) {
    fs.mkdirSync(webpDir, { recursive: true });
  }

  let sh = sharp(`${dirName}/${fileName}`);
  let webp = sharp(`${dirName}/${fileName}`);

  if (fileFormat === 'jpg' || fileFormat === 'jpeg') {
    sh = sh.jpeg({ quality: 70 });
    webp = webp.webp({ quality: 70 });
  } else if (fileFormat === 'png') {
    sh = sh.png({ quality: 70 });
    webp = webp.webp({ quality: 70 });
  } else if (fileFormat === 'gif') {
    sh = sh.gif({ quality: 70 });
    webp = webp.webp({ quality: 70 });
  } else if (fileFormat === 'svg') {
    // svgは複製のみ
    fs.copyFile(process.argv[2], `${compDir}/${fileName}`, (err) => {
      if (err) {
        fs.unlinkSync(`${compDir}/${fileName}`);
        console.log(
          `\u001b[1;33m ${fileName}を${compDir}から削除しました。`
        );
        return;
      }
      console.log(
        `\u001b[1;32m ${fileName}を${compDir}に複製しました。`
      );
    });
    return;
  } else {
    console.log('\u001b[1;31m 対応していないファイル形式です。');
    return;
  }

  sh.toFile(`${compDir}/${fileName}`, (err, info) => {
    if (err) {
      // 該当ファイルがない場合はcompとwebpフォルダから削除
      if (fs.existsSync(`${compDir}/${fileName}`)) {
        fs.unlinkSync(`${compDir}/${fileName}`);
        fs.unlinkSync(
          `${webpDir}/${fileName.replace(
            /\.[^/.]+$/,
            '.webp'
          )}`
        );
        console.log(
          `\u001b[1;33m ${fileName}を${compDir}および${webpDir}から削除しました。`
        );
      }
      return;
    }
    console.log(
      `\u001b[1;32m ${fileName}を圧縮しました。 ${info.size / 1000}KB`
    );

    // ファイル名に『no-webp』が含む場合は webp を生成しない。
    if (!fileName.includes('no-webp')) {
      webp.toFile(
        `${webpDir}/${fileName.replace(/\.[^/.]+$/, '.webp')}`,
        (err, info) => {
          console.log(
            `\u001b[1;32m ${fileName}をwebpに変換しました。 ${
              info.size / 1000
            }KB`
          );
        }
      );
    }
  });
})();
