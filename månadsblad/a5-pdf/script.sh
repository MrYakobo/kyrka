#!/bin/sh

tmp_new=$1
base=$2

tmp_a5="${base}_a5.pdf";
tmp_a6="${base}_a6.pdf";

#png_a5="${base}_a5.png";
#png_a6="${base}_a6.png";

pdfjam --landscape --nup '2x1' ${tmp_new} ${tmp_new} --outfile ${tmp_a5}
pdf90 ${tmp_a5} --outfile ${tmp_a5}
pdfjam --no-landscape --nup '2x2' ${tmp_new} ${tmp_new} ${tmp_new} ${tmp_new} --outfile ${tmp_a6}

#pdftoppm ${tmp_a5} ${png_a5} -png -f 1 -singlefile
#pdftoppm ${tmp_a6} ${png_a6} -png -f 1 -singlefile
