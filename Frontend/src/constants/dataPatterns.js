import * as yup from "yup";

const requiredMessage = "این فیلد حتما باید پر بشه";
const minMessage = (min) => `تعداد کاراکتر حداقل باید ${min} تا باشد `;
const matchMessage = "رمز وارد شده با رمز عبور یکسان نیست";
const numberMessage = "مقدار وارد شده باید عدد باشد";

const first_name = yup.string().required(requiredMessage).min(3, minMessage(3));
const last_name = yup.string().required(requiredMessage).min(3, minMessage(3));
const password = yup.string().required(requiredMessage).min(5, minMessage(5));
const age = yup.string().required(requiredMessage).min(1, minMessage(1));
const province_id = yup.string().required(requiredMessage);
const city_id = yup.string().required(requiredMessage);
const national_code = yup
    .number()
    .typeError(numberMessage)
    .required(requiredMessage)
    .min(3, minMessage(3));
const password2 = yup
    .string()
    .required(requiredMessage)
    .min(5, minMessage(5))
    .oneOf([yup.ref("password"), null], matchMessage);

export const signUpSchema = yup.object({
    first_name,
    last_name,
    father_name: first_name,
    national_code,
    province_id,
    city_id,
    age,
    password,
    password2,
});

export const loginSchema = yup.object({
    national_code,
    password,
});
