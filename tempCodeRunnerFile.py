import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
import json

# Dari 5 pertanyaan kami membagi 2 kategori menjadi positif dan negatif
# LstSquare dilakukan hanya pada x1 dan x2

def predict_Y(beta_0, beta_1, beta_2, X_positive_new, X_negative_new):
    """
    Fungsi untuk memprediksi nilai Y berdasarkan nilai X baru menggunakan koefisien regresi.
    
    Parameters:
        beta_0 (float): Koefisien intercept.
        beta_1 (float): Koefisien untuk variabel positive.
        beta_2 (float): Koefisien untuk variabel negative.
        X_positive_new (float): Nilai variabel positive yang baru.
        X_negative_new (float): Nilai variabel negative yang baru.
        
    Returns:
        float: Nilai Y yang diprediksi.
    """
    predicted_Y = beta_0 + (beta_1 * X_positive_new) + (beta_2 * X_negative_new)
    return predicted_Y

# Membaca data dari file CSV dengan pemisah kolom ';'
data = pd.read_csv('regression_files.csv', sep=';')

# Konversi nilai-nilai ke tipe data numerik dengan mengganti tanda koma dengan titik
data = data.replace(',', '.', regex=True)

# Memuat data ke dalam array numpy
X = data[['positive', 'negative']].values.astype(float)  # Mengonversi ke tipe data float
Y = data['positive-negative'].values.astype(float)  # Mengonversi ke tipe data float

# Least squares regression
X_transpose = np.transpose(X)
X_transpose_X_inv = np.linalg.inv(np.dot(X_transpose, X))
coefficients = np.dot(np.dot(X_transpose_X_inv, X_transpose), Y)

# Koefisien
positive_coeff = coefficients[0]
negative_coeff = coefficients[1]

# Membuat output JSON
result = {
    "positive_coefficient": positive_coeff,
    "negative_coefficient": negative_coeff
}

# Outputkan ke JSON
json_output = json.dumps(result, indent=4)
print(json_output)

# Nilai X baru yang ingin diprediksi
X_positive_new = 5.0
X_negative_new = 1.0

# Memanggil fungsi untuk memprediksi nilai Y
predicted_Y = predict_Y(0,positive_coeff, negative_coeff,  X_positive_new, X_negative_new)

print("Nilai Y yang diprediksi:", predicted_Y)