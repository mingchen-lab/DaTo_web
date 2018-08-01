import gensim
model= gensim.models.KeyedVectors.load_word2vec_format("E:/shengxin/jyc/full.25.20.single.train.vector.bin",binary=True)

print(model.most_similar("para"))