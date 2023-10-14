import { createGlobalStyle } from "styled-components";

const styled = { createGlobalStyle };

const GlobalStyles = styled.createGlobalStyle`
    :root {
        --color-grey-0: #f8f9fa;
        --color-grey-100: #e9ecef;
        --color-grey-200: #ced4da;
        --color-grey-300: #868e96;
        --color-grey-400: #4f626b;
        --color-grey-500: #3c4a52;
        --color-grey-600: #2a3439;
        --color-grey-700: #171c1f;
        --color-grey-800: #040505;
        --color-grey-800: #040505;

        --color-green-0: #e5f4eb;
        --color-green-100: #cbead7;
        --color-green-200: #b2dfc4;
        --color-green-300: #98d5b0;
        --color-green-400: #7eca9c;
        --color-green-500: #65a27d;
        --color-green-600: #4c795e;

        --color-red-0: #ffe3e3;
        --color-red-200: #ff7d7d;
        --color-red-400: #fa5252;

        --color-orange-0: #ffe8cc;
        --color-orange-200: #ffa94d;
        --color-orange-400: #e67700;
    }

    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
        -webkit-box-sizing: inherit;
        box-sizing: inherit;
    }

    html {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        font-size: 62.5%;
    }

    body {
        font-family: Vazirmatn;
        font-feature-settings: "ss01";
        line-height: 1.6;
        text-align: right;
        overflow: hidden;
        background-color: var(--color-green-0);
    }

    input,
    button,
    textarea,
    select {
        font: inherit;
        color: inherit;
    }

    button {
        cursor: pointer;
    }

    *:disabled {
        cursor: not-allowed;
    }

    ::-webkit-scrollbar {
        width: 1rem;
        border-radius: 25px;
    }

    ::-webkit-scrollbar-track {
        border-radius: 25px;
    }

    ::-webkit-scrollbar-thumb {
        background: var(--color-purple-200);
        border-radius: 25px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: var(--color-purple-400);
        border-radius: 25px;
    }

    input[type="checkbox"] {
        -webkit-appearance: none;
        appearance: none;
        background-color: #fff;
        margin: 0;

        width: 1.4rem;
        height: 1.4rem;
        border: 0.2rem solid var(--color-purple-100);
        border-radius: 0.15rem;
        transform: translateY(-0.075rem);

        display: grid;
        place-content: center;

        &::before {
            content: "";
            width: 1rem;
            height: 1rem;
            transform: scale(0);
            transition: 0.1s transform ease-in-out;
            background-color: var(--color-purple-200);
            transform-origin: bottom left;
            clip-path: polygon(
                14% 44%,
                0 65%,
                50% 100%,
                100% 16%,
                80% 0%,
                43% 62%
            );
        }

        &:checked::before {
            transform: scale(1);
        }
    }

    input[type="radio"] {
        -webkit-appearance: none;
        appearance: none;
        background-color: var(--color-grey-0);
        margin: 0;

        width: 1.4rem;
        height: 1.4rem;
        border: 0.2rem solid var(--color-purple-100);
        border-radius: 50%;
        transform: translateY(-0.075rem);

        display: grid;
        place-content: center;

        &::before {
            content: "";
            width: 0.8rem;
            height: 0.8rem;
            border-radius: 50%;
            transform: scale(0);
            transition: 0.1s transform ease-in-out;
            background-color: var(--color-purple-200);
        }

        &:checked::before {
            transform: scale(1);
        }
    }
`;

export default GlobalStyles;
