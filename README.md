## ファイルの特徴
- EJS兼WordPress用Gulpコーディングファイル
- EJSモードの場合src内の情報はdistフォルダに反映される
- WordPressモードの場合src内の情報並びにテンプレートファイルは指定のthemesフォルダ（gulpfile.jsで指定）へ反映されるのでWPローカル環境外にて操作が可能（gulpの設定でdistフォルダにbuildもできる）
- 各モードの切り替えはgulpfile.jsで行う

## ファイル構成  
∟ dist ・・・本番用  
　∟ assets  
　　∟ css  
　　∟ images  
　　∟ js  
　∟ index.html

∟ src ・・・開発用  
　∟ ejs  
　∟ assets   
　　∟ css  
　　∟ images  
　　∟ js  
　　∟ sass   
　　　∟ base ・・・リセット系    
　　　∟ global ・・・変数管理  
　　　∟ object ・・・各ページ、コンポーネント用  
　　　∟ style.scss ・・・インクルード用SCSS  
　　　∟ utility ・・・共通SCSS  
∟ _gulp ・・・gulpファイル格納用  


## 使用環境
- Node.js バージョン14系以上
- npm バージョン8以上
- バージョン確認方法：※ターミナル上でコマンドを入力すること
  - `node -v`
  - `npm -v`
- コマンドを入力後、数字がでてくれば大丈夫です
## 使い方および操作方法 
### - EJSモードの場合 
1. gulpfile.jsの[初期設定]の[コンパイル設定]を`ejs`に変更
2. ターミナルを開く
3. `cd _gulp`をターミナルに入力
4. `npm i`をターミナルへ入力
5. ダウンロードが始まります
6. `npx gulp`または `npm run dev`でタスクランナーが起動します
7. 提出時は `npx gulp build`ないしは`npm run build` コマンドでフォルダ内の整理を行うこと 

### - WordPressモードの場合
1. gulpfile.jsの[初期設定]の[コンパイル設定]を`wp`に変更
2. gulpfile.jsの[初期設定]の各項目を設定
3. ターミナルを開く
4. `cd _gulp`をターミナルに入力
5. `npm i`をターミナルへ入力
6. ターミナルを開く
7. `cd _gulp`をターミナルに入力（cdと_gulpの間には半角スペース要）
8. `npm i`をターミナルへ入力
9. ダウンロードが始まります
10. `npx gulp`または `npm run dev`でタスクランナーが起動し、指定したWPローカル環境のテーマフォルダに出力されます
11. 提出時は `npx gulp build`ないしは`npm run build` テーマフォルダ内の整理を行うこと  
12. `npx gulp build-dist`ないしは`npm run build-dist` にて本プロジェクトのdistフォルダにも出力可能です。GitHubなどで本ファイルを共有している場合などはこちらも使用してください。

### - WordPressモードの場合（ローカル環境内に組み込んで使用する場合）
1. gulpfile.jsの[初期設定]の[コンパイル設定]を`wp-build`に変更
2. ターミナルを開く
3. `cd _gulp`をターミナルに入力
4. `npm i`をターミナルへ入力
5. ターミナルを開く
6. `cd _gulp`をターミナルに入力（cdと_gulpの間には半角スペース要）
7. `npm i`をターミナルへ入力
8. ダウンロードが始まります
9. `npx gulp`または `npm run dev`でタスクランナーが起動し、指定したWPローカル環境のテーマフォルダに出力されます
10. 提出時は `npx gulp build`ないしは`npm run build` コマンドでフォルダ内の整理を行うこと  

```
//[必須！！！！！] コンパイル設定 ejs or wp or wp-build
//ejs ： 本プロジェクトのdistフォルダに出力
//wp ： 下記で指定したWPローカル環境のテーマフォルダに出力
//wp-build ： 本プロジェクトのdistフォルダに出力
const compilingSet = "wp";
// WordPressの開発環境 local or studio or mamp or docker で指定
const wpDevSet = "local"; 
// WordPressのプロジェクト名
const wpProject = "test01";
// WordPressのテーマ名 //style.cssのテーマ名も変更すること
const wpThemeName = "test01";
// WordPressのローカル環境のURL
const wpLocalUrl = "http://localhost:10114/"; 
// PCユーザー名
const pcName = "kounosatoshi";
// Localフォルダ
const localFolder = "Local Sites";
// Studioフォルダ
const studioFolder = "Studio";
// MAMPフォルダ
const mampFolder = "Desktop/mamp";
```

## コーディング時の操作方法
- `srcフォルダ`内のみを触る
- `srcフォルダ`内に入力した情報は自動的に`distフォルダ`に反映されます
- `distフォルダ`はアップロードするファイルなので編集は厳禁

## ファイルの特徴
- スマホファーストおよびパソコンファーストどちらも設定が可能`（変数管理）`
  - src/sass/global/_breakpoints.scssにある変数を`pc` or `sp`に設定する（初期値：`sp`）
  - スマホファーストとパソコンファーストを変数一つで切り替えが可能になっています

